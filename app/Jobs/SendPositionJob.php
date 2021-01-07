<?php

namespace App\Jobs;

use App\Events\sendPositionEvent;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendPositionJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    
    public $position;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($position)
    {
        $this->position = $position;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        event(new sendPositionEvent($this->position));
    }
}
