<?php
namespace App\Services\Drive;

use App\Models\Drive\Car;
use App\Models\Drive\Drive;
use App\User;

class HospitalDrive
{
    public $user;
    public $drive;

    public function __construct(User $user, ?Drive $drive = null)
    {
        $this->drive = $drive;
        $this->user = $user;
    }

    public function start($sourceLat,  $sourceLng, ?Car $car = null)
    {
        $drive = $this->user->drives()->create([
            's_lat' => $sourceLat,
            's_lng' => $sourceLng,
            'car_id' => optional($car)->id
        ]);

        if (!is_null($drive->car_id)) {
            $drive->car->setAsUnAvailable();
        }

        $drive->setAsPending();

        $this->drive = $drive;
        return $this->drive;
    }

    public function assignCar(Car $car)
    {
        if (!is_null($this->drive->car_id)) {
            $this->drive->car->setAsAvailable();
        }

        $this->drive->update([
            'car_id' => $car
        ]);

        $this->drive->car->setAsUnAvailable();
        return $this->drive;
    }

    public function locateDestination($d_lat,  $d_lng)
    {
        $this->drive->locations()->create([
            'd_lat' => $d_lat,
            'd_lng' => $d_lng
        ]);

        return $this->drive;
    }

    public function finish()
    {
        $this->drive->setAsFinished();
        $this->drive->car->setAsAvailable();
        return $this->drive;
    }
}
