@extends('admin.home')

@extends('admin.css')
  <link href="{{ asset('vendor/fullcalendar/main.css') }}" rel="stylesheet">

@extends('admin.scripts')
  <script src="{{ asset('vendor/fullcalendar/main.js') }}"></script>
  <script src="{{ asset('vendor/fullcalendar/locales/es.js') }}"></script>
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
            description: eventEl.getElementsByTagName('div')[0].getAttribute("value"),
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
        if (val.length == 0 || val2.length == 0) {
          return
        }
        //Create events
        var event = $('<div />')
        event.css({
          'background-color': currColor,
          'border-color'    : currColor,
          'color'           : '#fff'
        }).addClass('external-event')
        event.html("<div value="+val2+">"+val+"</div>")
        $('#external-events').prepend(event)
        //Remove event from text input
        $('#new-event').val('')
        $('#new-event-desc').val('')
        //Add draggable funtionality
        ini_events(event)
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
          if (title && description) {
            calendar.addEvent({
              updateStatus: "new",
              title: title,
              description: description,
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
          $('#deleteEvent').modal('toggle');
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
            @if($currentEvent->status == '1')
              {
                updateStatus: 'old',
                id: '{{($currentEvent->id)}}',
                title: '{{($currentEvent->title)}}',
                description: '{{($currentEvent->description)}}',
                backgroundColor: '{{($currentEvent->color)}}',
                color    : '{{($currentEvent->color)}}',
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
      function getDataGUI(){
        newEvents = calendar.getEvents().filter(calendar => calendar.extendedProps.updateStatus == "new");
        updEvents = calendar.getEvents().filter(calendar => calendar.extendedProps.updateStatus == "update");
        for(var newEvent of newEvents){
          events = {
            id: newEvent.id,
            title: newEvent.title,
            description: newEvent.extendedProps.description,
            color: newEvent.backgroundColor,
            start: newEvent.start.toLocaleString(),
            end: newEvent.end,
            status: '1',
            '_token':$("meta[name = 'csrf-token']").attr("content"),
          }
          //Avoid events.end to be null
          if(events.end == null) events.end = events.start;
          else events.end = events.end.toLocaleString();
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
        for(var updEvent of updEvents){
          events = {
            id: updEvent.id,
            start: updEvent.start.toLocaleString(),
            end: updEvent.end,
            '_token':$("meta[name = 'csrf-token']").attr("content"),
          }
          //Avoid events.end to be null
          if(events.end == null) events.end = events.start;
          else events.end = events.end.toLocaleString();
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
      }
      $('#saveUpdate').click(function(){
        getDataGUI();
        window.location="{{ url('/admin/events') }}";
      });
    });
  </script>

@section ('admincontent')
  <!-- Update news modal -->
  <div class="modal fade" id="updateFcal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div id="updateModalText" class="modal-body">
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button id="saveUpdate" type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Delete nw modal -->
  <div class="modal fade" id="deleteEvent" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form action="/admin/events/destroy" method="POST">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Seguro que desea eliminar este evento?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          @csrf
          <input type="hidden" class="form-control" id="idDelete" name='idDelete' value="{{ old('idDelete') }}" required autocomplete="idDelete">
          <div id="eventTitle"></div>
          <div id="eventDescription"></div>
          <div id="eventStart"></div>
          <div id="eventEnd"></div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary btnupdtuser">Delete</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="row">
    <div class="col-md-2">
      <div class="sticky-top mb-3">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Draggable Events</h4>
          </div>
          <div class="card-body">
            <!-- the events -->
            <div id="external-events">
              <div class="checkbox">
                <label for="drop-remove">
                  <input type="checkbox" id="drop-remove">
                  remove after drop
                </label>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Create Event</h3>
          </div>
          <div class="card-body">
            <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
              <!--<button type="button" id="color-chooser-btn" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>-->
              <ul class="fc-color-picker" id="color-chooser">
                <li><a class="text-primary" href="#"><i class="fas fa-square"></i></a></li>
                <li><a class="text-warning" href="#"><i class="fas fa-square"></i></a></li>
                <li><a class="text-success" href="#"><i class="fas fa-square"></i></a></li>
                <li><a class="text-danger" href="#"><i class="fas fa-square"></i></a></li>
                <li><a class="text-purple" href="#"><i class="fas fa-square"></i></a></li>
              </ul>
            </div>
            <!-- /btn-group -->
            <div class="row">
              <input id="new-event" type="text" class="form-control" placeholder="Event Title"><br>
              <input id="new-event-desc" type="text" class="form-control" placeholder="Event Description">
              <button id="add-new-event" type="button" class="btn btn-primary">Add</button>
              <!-- /btn-group -->
            </div>
            <!-- /input-group -->
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-10">
      <div class="card card-primary">
        <div class="card-body p-0">
          <div id='calendar'></div>
        </div>
      </div>
    </div>
  </div>
@endsection