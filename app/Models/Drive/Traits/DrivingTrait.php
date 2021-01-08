<?php

namespace App\Models\Drive\Traits;


trait DrivingTrait
{
    public function setAsPending()
    {
        $this->setStatus('pending');
        return $this;
    }


    public function setAsActive()
    {
        $this->setStatus('active');
        return $this;
    }

    public function setAsFinished()
    {
        $this->setStatus('finished');
        return $this;
    }
}
