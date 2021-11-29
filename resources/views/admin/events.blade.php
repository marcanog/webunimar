@extends('admin.home')

@extends('admin.css')
  <!-- Fullcalendar -->
  <link href="{{ asset('vendor/fullcalendar/main.css') }}" rel="stylesheet">

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
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button id="saveUpdate" type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Delete new modal -->
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
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary btnupdtuser">Delete</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <!-- Create events box -->
  <div class="row">
    <div class="col-md-2">
      <div class="sticky-top mb-3">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Draggable Events</h4>
          </div>
          <div class="card-body">
            <div id="external-events">
              <div class="checkbox">
                <label for="drop-remove">
                  <input type="checkbox" id="drop-remove">
                  remove after drop
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Create Event</h3>
          </div>
          <div class="card-body">
            <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
              <ul class="fc-color-picker" id="color-chooser">
                <li><a class="text-primary" href="#"><i class="fas fa-square"></i></a></li>
                <li><a class="text-warning" href="#"><i class="fas fa-square"></i></a></li>
                <li><a class="text-success" href="#"><i class="fas fa-square"></i></a></li>
                <li><a class="text-danger" href="#"><i class="fas fa-square"></i></a></li>
                <li><a class="text-purple" href="#"><i class="fas fa-square"></i></a></li>
              </ul>
            </div>
            <div class="row">
              <input id="new-event" type="text" class="form-control" placeholder="Event Title"><br>
              <input id="new-event-desc" type="text" class="form-control" placeholder="Event Description">
            </div>
          </div>
          <button id="add-new-event" type="button" class="btn btn-primary">Add</button>
        </div>
      </div>
    </div>

    <!-- News' calendar -->
    <div class="col-md-10">
      <div class="card card-primary">
        <div class="card-body p-0">
          <div id='calendar'></div>
        </div>
      </div>
    </div>
  </div>

  <!-- Local scripts -->
  <script src="{{ asset('vendor/fullcalendar/main.js') }}"></script>
  <script src="{{ asset('vendor/fullcalendar/locales/es.js') }}"></script>
  @include('layouts.eventsAdminCalendar')
@endsection