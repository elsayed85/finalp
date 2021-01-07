@extends('patient.layouts.app')
@section('title' , "Calendar")

@section('css_after')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('/assets/js/plugins/flatpickr/flatpickr.min.css') }}">
@endsection

@section('content')
<div class="content">
    <livewire:patient.appointments-calendar
        week-starts-at="6"
        before-calendar-view="patient.appointments.includes.before_calendar"
        after-calendar-view="patient.appointments.includes.after_calendar" />

    <div class="modal fade" id="show_event_modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-popout" role="document" id="event_content">
            <!-- content here -->
        </div>
    </div>
</div>
@endsection

@section('js_after')
@livewireCalendarScripts
<script src="{{ asset('/assets/js/plugins/flatpickr/flatpickr.min.js') }}"></script>

<script>
    Livewire.on('new_event_date_selected', (data) => {
        const fp = flatpickr($("#event_scheduled_at"), {});
        fp.setDate(data.event_date)
        $("#add_new_event_model").modal()
    })

    Livewire.on('new_event_added', (data) => {
        $("#add_new_event_model").modal("toggle")
        Swal.fire({
            position: 'bottom-end',
            icon: 'success',
            title: data.message,
            showConfirmButton: false,
            timer: 2000
        })
    })

    Livewire.on('show_event', (data) => {
        $("#show_event_modal").modal()
        $('#event_content').html(data.content)
    })
</script>
@endsection
