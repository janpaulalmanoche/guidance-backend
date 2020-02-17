
<script>

    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            timeZone: 'local',
            plugins: [ 'interaction', 'dayGrid', 'timeGrid' ],
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            defaultDate: '{{\Carbon\Carbon::now()}}',
            navLinks: true, // can click day/week names to navigate views
            selectable: true,
            selectMirror: true,
            select: function(arg) {

                // var title = prompt('Add Booking to this Date ?');
                // if (title) {
                // //      calendar.addEvent({
                // //          title: title,
                // //          start: arg.start,
                // //          end: arg.end,
                // //          allDay: arg.allDay
                // //      })
                //     title = '1'
                //     console.log('jaja')
                //     window.location.href='/'
                //         }
                calendar.unselect()

            },
            dateClick: function(info) {
                Swal.fire({
                    title: 'Do you want to add schedule to this date?',
                    text: "Just Click Yes !",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, I Want!'
                }).then((result) => {
                    if (result.value) {
                        // Swal.fire(
                        //     'Deleted!',
                        //     'Your file has been deleted.',
                        //     'success'
                        // )
                        // alert(info.dateStr)
                        window.location.assign('/add-booking/'+info.dateStr);
                    }
                })
                // alert('Date: ' + info.dateStr);
                // alert('Resource ID: ' + info.resource.id);
                calendar.unselect()
            },
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            events: [

            ]
        });

        calendar.render();
    });

</script>
<style>

    body {
        margin: 20px 10px;
        padding: 0;
        font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
        font-size: 14px;
    }

    #calendar {
        max-width: 900px;
        margin: 0 auto;
    }

</style>

@extends('layouts.master')
@section('content')


    <div id='calendar'>

    </div>

@endsection

