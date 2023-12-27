{{-- events.blade.php --}}
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Calendar</h5>
        {!! Qs::getPanelOptions() !!}
    </div>

    <div class="card-body">
        <div class="fullcalendar-basic"></div>
    </div>
</div>

@push('scripts')
    <script>
        // Add your custom script for handling events in the calendar
        // You can use a JavaScript library like FullCalendar to implement the calendar functionality
    </script>
@endpush

@push('styles')
    <style>
        /* Add any custom styles for the calendar here */
    </style>
@endpush

@push('events')
    {{-- Festival of the Dhow countries --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add the event to the calendar using FullCalendar's API
            $('.fullcalendar-basic').fullCalendar('renderEvent', {
                title: 'Festival of the Dhow countries',
                start: '2023-06-15',
                end: '2023-06-18'
            });
        });
    </script>

    {{-- The Swahili cultural festival --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add the event to the calendar using FullCalendar's API
            $('.fullcalendar-basic').fullCalendar('renderEvent', {
                title: 'The Swahili cultural festival',
                start: '2023-07-10',
                end: '2023-07-15'
            });
        });
    </script>

    {{-- The great Serengeti Migration --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add the event to the calendar using FullCalendar's API
            $('.fullcalendar-basic').fullCalendar('renderEvent', {
                title: 'The great Serengeti Migration',
                start: '2023-09-01',
                end: '2023-09-30'
            });
        });
    </script>
@endpush
