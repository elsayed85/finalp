<?php

namespace App\Http\Livewire\Patient;

use App\Models\Appointment;
use Asantibanez\LivewireCalendar\LivewireCalendar;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Livewire\Component;

class AppointmentsCalendar extends LivewireCalendar
{
    public $pollMillis  = 70000;
    public $event_title;
    public $event_notes;
    public $event_scheduled_at;

    public $selected_event_date;

    protected $rules = [
        'event_title' => ['required', 'min:2', 'max:40'],
        'event_notes' => ['nullable', 'max:50'],
        'event_scheduled_at' => ['nullable', 'date_format:Y-m-d H:i'],
    ];

    protected $listeners = ['delete_single_event' => 'deleteSingleEvent'];

    public function deleteSingleEvent($eventId)
    {
        $this->postCount = Post::count();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, $this->rules);
    }

    public function events() : Collection
    {
        return auth()->user()->appointments()
            ->whereDate('scheduled_at', '>=', $this->gridStartsAt)
            ->whereDate('scheduled_at', '<=', $this->gridEndsAt)
            ->get()
            ->map(function (Appointment $model) {
                return [
                    'id' => $model->id,
                    'title' => $model->title,
                    'description' => $model->description,
                    'date' => $model->scheduled_at,
                ];
            });
    }
    public function onDayClick($year, $month, $day)
    {
        $this->selected_event_date = now()->year($year)->month($month)->day($day)->format("Y-m-d H:i");
        $this->event_scheduled_at = $this->selected_event_date;
        $this->emit('new_event_date_selected', ['event_date' => $this->selected_event_date]);
    }

    public function onEventClick($eventId)
    {
        $event = auth()->user()->appointments()->find($eventId);
        if ($event) {
            $content = view('patient.appointments.includes.single_event', ['event' => $event])->render();
            $this->emit('show_event', ['content' => $content]);
        }
    }

    public function onEventDropped($eventId, $year, $month, $day)
    {
        $event = auth()->user()->appointments()->find($eventId);
        if ($event) {
            $event->update(["scheduled_at" => now()->year($year)->month($month)->day($day)->toDateString()]);
        }
    }

    public function addEvent()
    {
        $validatedData = (object) $this->validate();

        $event = auth()->user()->appointments()->create([
            'title' => $validatedData->event_title,
            'description' => $validatedData->event_notes,
            'scheduled_at' => $validatedData->event_scheduled_at,
        ]);

        $this->reset([
            'event_title',
            'event_notes',
            'event_scheduled_at'
        ]);

        $this->emit('new_event_added', ['message' => "new event : " . $event->title . " added."]);
    }
}
