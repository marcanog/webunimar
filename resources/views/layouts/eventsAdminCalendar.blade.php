<script>
    document.addEventListener('DOMContentLoaded', function() {
        /* DRAGGABLE EVENTS FUNCTIONS */
        var containerEl = document.getElementById('external-events');
        new FullCalendar.Draggable(containerEl, {
            itemSelector: '.external-event',
            eventData: function(eventEl) {
                return {
                    updateStatus: "new",
                    title: eventEl.innerText,
                    description: eventEl.getElementsByTagName('div')[0].getAttribute("data-description"),
                    tags: eventEl.getElementsByTagName('div')[0].getAttribute("data-tags"),
                    backgroundColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
                    borderColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
                    textColor: window.getComputedStyle( eventEl ,null).getPropertyValue('color'),
                };
            }
        });
        /* ADDING DRAGGABLE EVENTS */
        var currColor = '#3c8dbc' //Red by default
        //Color chooser button
        var colorChooser = $('#color-chooser-btn')
        $('#color-chooser > li > a').click(function (e) {
            e.preventDefault()
            //Save color
            currColor = $(this).css('color')
            //Add color effect to button
            $('#add-new-event').css({
                'background-color': currColor,
                'border-color'    : currColor
            })
        })
        $('#add-new-event').click(function (e) {
            e.preventDefault()
            //Get value and make sure it is not null
            var val = $('#new-event').val()
            var val2 = $('#new-event-desc').val()
            var val3 = $('#new-event-tags').val()
            if (val.length == 0 || val2.length == 0 || val3.length == 0) {
                return
            }
            //Create events
            var event = $('<div />')
            event.css({
                'background-color': currColor,
                'border-color'    : currColor,
                'color'           : '#fff'
            }).addClass('external-event')
            event.html("<div data-description='"+val2+"' data-tags='"+val3+"'>"+val+"</div>")
            $('#external-events').prepend(event)
            //Remove event from text input
            $('#new-event').val('')
            $('#new-event-desc').val('')
            $('#new-event-tags').tagsinput('removeAll')
            //Add draggable funtionality
        })
        
        /* BUILDING CALENDAR */
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            headerToolbar: {
                left: 'prev,next updateFcal',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            customButtons:{
                updateFcal:{
                    text:"Actualizar",
                    click:function(){
                        newEvents = calendar.getEvents().filter(calendar => calendar.extendedProps.updateStatus == "new");
                        updEvents = calendar.getEvents().filter(calendar => calendar.extendedProps.updateStatus == "update");
                        $('#updateModalText').html(newEvents.length+" eventos serán agregados al calendario</br>"+updEvents.length+" eventos serán actualizados");
                        $('#updateFcal').modal('toggle');
                    }
                }
            },
            navLinks: true, // can click day/week names to navigate views
            selectable: true,
            selectMirror: true,
            select: function(arg) {
            var title = prompt('Título del evento:');
            var description = prompt('Descripción del evento:');
            var tags = prompt('Tags del evento:');
            if (title && description && tags) {
                calendar.addEvent({
                    updateStatus: "new",
                    title: title,
                    description: description,
                    tags: tags,
                    start: arg.start,
                    end: arg.end,
                    allDay: arg.allDay,
                    backgroundColor: '#2c3e50',
                    borderColor    : '#2c3e50'
                })
            }
            calendar.unselect()
            },
            eventClick: function(arg) {
                $('#idDelete').val(arg.event.id);
                $('#eventTitle').html("Título del evento: "+arg.event.title+"</br>");
                $('#eventDescription').html("Descripción del evento: "+arg.event.extendedProps.description+"</br>");
                $('#eventStart').html("Inicio del evento: "+arg.event.start.toLocaleString()+"</br>");
                if(arg.event.end == null) $('#eventEnd').html("Final del evento: "+arg.event.start.toLocaleString());
                else $('#eventEnd').html("Final del evento: "+arg.event.end.toLocaleString());
                if(arg.event.extendedProps.updateStatus == "new"){
                    $('#eventTags').html("Tags: "+arg.event.extendedProps.tags.slice(0, -1)+"</br>");
                    $('#deleteEvent').modal('toggle');
                }
                else{
                    $.ajax(
                        {
                        type: "POST",
                        url: "{{ url('/admin/showtags') }}",
                        data: { tags_id : arg.event.extendedProps.tags_id, '_token':$("meta[name = 'csrf-token']").attr("content") },
                        success: function(msg){
                            $('#eventTags').html("Tags: "+msg.slice(0, -1)+"</br>");
                            $('#deleteEvent').modal('toggle');
                        },
                        error: function(){ alert("Hay un error"); }
                        }
                    );
                }
            },
            eventDrop: function(arg) {
                if(arg.event.extendedProps.updateStatus != "new") arg.event.setExtendedProp('updateStatus', 'update'); 
            },
            eventResize: function(arg) {
                if(arg.event.extendedProps.updateStatus != "new") arg.event.setExtendedProp('updateStatus', 'update'); 
            },
            editable: true,
            dayMaxEvents: true, // allow "more" link when too many events
            droppable: true, // this allows things to be dropped onto the calendar
            drop: function(arg) {
                // is the "remove after drop" checkbox checked?
                if (document.getElementById('drop-remove').checked) {
                    // if so, remove the element from the "Draggable Events" list
                    arg.draggedEl.parentNode.removeChild(arg.draggedEl);
                }
            },
            locale: 'es',
            events: [
                @foreach($currentEvents as $currentEvent)
                    @if($currentEvent->status_id == '1')
                    {
                        updateStatus: 'old',
                        id: '{{($currentEvent->id)}}',
                        title: '{{($currentEvent->title)}}',
                        description: '{{($currentEvent->description)}}',
                        backgroundColor: '{{($currentEvent->color)}}',
                        color    : '{{($currentEvent->color)}}',
                        tags_id    : '{{($currentEvent->tags_id)}}',
                        @if($currentEvent->start == $currentEvent->end)
                            start: '{{($currentEvent->start)}}'
                        @else 
                            start: '{{($currentEvent->start)}}',
                            end: '{{($currentEvent->end)}}'
                        @endif
                    },
                    @endif
                @endforeach
            ]
        });
        calendar.render();
        
        /* UPDATE AND REFRESH CALENDAR */
        $('#saveUpdate').click(function(){
            //Send new events
            newEvents = calendar.getEvents().filter(calendar => calendar.extendedProps.updateStatus == "new");
            for(var newEvent of newEvents){
                events = {
                    id: newEvent.id,
                    title: newEvent.title,
                    description: newEvent.extendedProps.description,
                    tags: newEvent.extendedProps.tags,
                    color: newEvent.backgroundColor,
                    start: newEvent.start.toISOString().split('T'),
                    end: newEvent.end,
                    '_token':$("meta[name = 'csrf-token']").attr("content"),
                }
                //Avoid events.end to be null
                if(events.end == null) events.end = events.start;
                else events.end = events.end.toISOString().split('T');
                console.log(events);
                $.ajax(
                    {
                    type: "POST",
                    url: "{{ url('/admin/events') }}",
                    data: events,
                    success: function(msg){ console.log(msg); },
                    error: function(){ alert("Hay un error"); }
                    }
                );
            }
            //Send updated events
            updEvents = calendar.getEvents().filter(calendar => calendar.extendedProps.updateStatus == "update");
            for(var updEvent of updEvents){
                events = {
                    id: updEvent.id,
                    start: updEvent.start.toISOString().split('T'),
                    end: updEvent.end,
                    '_token':$("meta[name = 'csrf-token']").attr("content"),
                }
                //Avoid events.end to be null
                if(events.end == null) events.end = events.start;
                else events.end = events.end.toISOString().split('T');
                $.ajax(
                    {
                    type: "POST",
                    url: "{{ url('/admin/events/update') }}",
                    data: events,
                    success: function(msg){ console.log(msg); },
                    error: function(){ alert("Hay un error"); }
                    }
                );
            }
            window.location="{{ url('/admin/events') }}";
        });
    });
    document.getElementsByClassName("content-wrapper")[0].setAttribute("id","content-wrapper-fc");
</script>