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
          console.log(eventEl);
          return {
            title: eventEl.innerText,
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
        if (val.length == 0) {
          return
        }
        //Create events
        var event = $('<div />')
        event.css({
          'background-color': currColor,
          'border-color'    : currColor,
          'color'           : '#fff'
        }).addClass('external-event')
        event.html(val)
        $('#external-events').prepend(event)
        //Add draggable funtionality
        ini_events(event)
        //Remove event from text input
        $('#new-event').val('')
      })

      
      /* BUILDING CALENDAR */
      var calendarEl = document.getElementById('calendar');
      var calendar = new FullCalendar.Calendar(calendarEl, {
        headerToolbar: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        navLinks: true, // can click day/week names to navigate views
        selectable: true,
        selectMirror: true,
        select: function(arg) {
          var title = prompt('Título del evento:');
          if (title) {
            calendar.addEvent({
              title: title,
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
          if (confirm('¿Seguro que desea eliminar este evento?')) {
            arg.event.remove()
          }
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
        locale: 'es'
        /*events: [
          {
            title: 'All Day Event',
            start: '2020-09-01'
          },
          {
            title: 'Long Event',
            start: '2020-09-07',
            end: '2020-09-10'
          },
          {
            groupId: 999,
            title: 'Repeating Event',
            start: '2020-09-09T16:00:00'
          },
          {
            groupId: 999,
            title: 'Repeating Event',
            start: '2020-09-16T16:00:00'
          },
          {
            title: 'Conference',
            start: '2020-09-11',
            end: '2020-09-13'
          },
          {
            title: 'Meeting',
            start: '2020-09-12T10:30:00',
            end: '2020-09-12T12:30:00'
          },
          {
            title: 'Lunch',
            start: '2020-09-12T12:00:00'
          },
          {
            title: 'Meeting',
            start: '2020-09-12T14:30:00'
          },
          {
            title: 'Happy Hour',
            start: '2020-09-12T17:30:00'
          },
          {
            title: 'Dinner',
            start: '2020-09-12T20:00:00'
          },
          {
            title: 'Birthday Party',
            start: '2020-09-13T07:00:00'
          },
          {
            title: 'Click for Google',
            url: 'http://google.com/',
            start: '2020-09-28'
          }
        ]*/
      });
      calendar.render();
    });
  </script>

@section ('admincontent')
  <div class="row">
    <div class="col-md-3">
      <div class="sticky-top mb-3">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Draggable Events</h4>
          </div>
          <div class="card-body">
            <!-- the events -->
            <div id="external-events">
              <div class="external-event bg-warning ui-draggable ui-draggable-handle" style="position: relative;">Event 1</div>
              <div class="external-event bg-info ui-draggable ui-draggable-handle" style="position: relative;">Event 2</div>
              <div class="external-event bg-primary ui-draggable ui-draggable-handle" style="position: relative;">Event 3</div>
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
                <li><a class="text-orange" href="#"><i class="fas fa-square"></i></a></li>
              </ul>
            </div>
            <!-- /btn-group -->
            <div class="input-group">
              <input id="new-event" type="text" class="form-control" placeholder="Event Title">
              <div class="input-group-append">
                <button id="add-new-event" type="button" class="btn btn-primary">Add</button>
              </div>
              <!-- /btn-group -->
            </div>
            <!-- /input-group -->
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <div class="card card-primary">
        <div class="card-body p-0">
          <div id='calendar'></div>
        </div>
      </div>
    </div>
  </div>
@endsection