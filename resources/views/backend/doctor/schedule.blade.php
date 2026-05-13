@extends('backend.doctor.layout')

@section('body')

<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="container mt-4">
    <h3>Doctor Schedule Calendar</h3>

    <div id="calendar"></div>
</div>

<!-- FullCalendar -->
<link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.17/index.global.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.17/index.global.min.js"></script>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- MODAL -->
<div class="modal fade" id="appointmentModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title">Add Schedule</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <input type="hidden" id="selectedDate">

        <div class="mb-3">
            <label>Time</label>
            <input type="time" id="time" class="form-control">
        </div>

        <div class="mb-3">
            <label>Comment</label>
            <textarea id="comment" class="form-control"></textarea>
        </div>

      </div>

      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button class="btn btn-primary" id="saveBtn">Save</button>
      </div>

    </div>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {

    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {

        initialView: 'dayGridMonth',
        height: 650,
        editable: true,
        selectable: true,

        events: '/calendar/events',

        // CREATE
        dateClick: function(info) {

            document.getElementById('selectedDate').value = info.dateStr;

            let modal = new bootstrap.Modal(document.getElementById('appointmentModal'));
            modal.show();
        },

        // EDIT / DELETE
        eventClick: function(info) {

            let newTime = prompt("Edit time:", info.event.start.toISOString().substring(11,16));

            if (newTime === null) return;

            let action = confirm("OK = Update, Cancel = Delete");

            if (action) {

                fetch('/calendar/update/' + info.event.id, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        date: info.event.startStr.split('T')[0],
                        time: newTime
                    })
                })
                .then(res => res.json())
                .then(() => calendar.refetchEvents());

            } else {

                fetch('/calendar/delete/' + info.event.id, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                })
                .then(() => calendar.refetchEvents());
            }
        }
    });

    calendar.render();

    // SAVE
    document.getElementById('saveBtn').addEventListener('click', function () {

        let date = document.getElementById('selectedDate').value;
        let time = document.getElementById('time').value;
        let comment = document.getElementById('comment').value;

        console.log(date, time, comment); 

        fetch('/calendar/store', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({
                doctor_id: 1,
                date: date,
                time: time,
                comment: comment
            })
        })
        .then(res => res.json())
        .then(data => {
            console.log("Saved:", data); 

            let modalEl = document.getElementById('appointmentModal');
            bootstrap.Modal.getInstance(modalEl).hide();

            document.getElementById('time').value = '';
            document.getElementById('comment').value = '';

            calendar.refetchEvents();
        })
        .catch(error => {
            console.error("Error:", error); 
        });

    });

});
</script>

<style>
#calendar {
    background: #fff;
    padding: 20px;
    border-radius: 10px;
}
</style>

@endsection