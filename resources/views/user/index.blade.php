<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
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
            eventClick: function(info) {
                // Swal.fire({
                //     title:   ' Time: '+ info.event.title + ' | Teacher: ' + info.event.extendedProps.department,
                //     animation: true,
                //     customClass: {
                //         popup: 'animated tada'
                //     }
                // })
                // info.el.style.borderColor = 'black';

                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: 'btn btn-success',
                        cancelButton: 'btn btn-danger'
                    },
                    buttonsStyling: false
                })

                swalWithBootstrapButtons.fire({
                    title: 'Mark Booking as Finish',
                    text: "You won't be able to revert this",
                    icon: 'info',
                    showCancelButton: true,
                    confirmButtonText: 'End Booking',
                    cancelButtonText: 'Cancel',
                    reverseButtons: true
                }).then((result) => {
                    if (result.value) {
                        // window.axios = require('axios');
                        // axios.get('http://127.0.0.1:8000/api/haha')
                        //     .then(function (response) {
                        //         // handle success
                        //         console.log(response.data);
                        //     })
                        window.location.href='/end-booking/'+info.event.extendedProps.id;


                    } else if (
                        /* Read more about handling dismissals below */
                        result.dismiss === Swal.DismissReason.cancel
                    )
                    {
                        swalWithBootstrapButtons.fire(
                            'Cancelled',
                            'Your imaginary file is safe :)',
                            'error'
                        )
                    }
                })
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
                        function load() {
                            // location.assign("http://127.0.0.1:8000/add-booking/"+info.dateStr);
                            location.assign("http://127.0.0.1:8000/relay/"+info.dateStr);
                        }
                        load()
                    }
                })
                // alert('Date: ' + info.dateStr);
                // alert('Resource ID: ' + info.resource.id);
                calendar.unselect()
            },
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            events: [
                @foreach($events as $event)
                {
                    title: '{{$event->title}}',
                    start: '{{$event->start}}',
                    extendedProps: {
                        department: 'BioChemistry',
                        id: '{{$event->id}}'
                    },

                },
            @endforeach
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
</div>
@endsection

