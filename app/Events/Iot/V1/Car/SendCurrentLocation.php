<?php

namespace App\Events\Iot\V1\Car;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SendCurrentLocation implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $car;
    public $payload;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($car , $payload)
    {
        $this->car = $car;
        $this->payload = $payload;
    }

    public function broadcastOn()
    {
        return new PrivateChannel('App.Car.' . $this->car);
    }

    public function broadcastAs()
    {
        return "send_location_event";
    }

    public function broadcastWith()
    {
        return [
            'car' => $this->car,
            'payload' => $this->payload,
            'created_at' => now()
        ];
    }
}
