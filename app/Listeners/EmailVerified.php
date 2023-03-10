<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Verified;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailVerified
{
    public function handle(Verified $event)
    {

        session()->flash('success', 'The mailbox authentication succeeded!');
    }
}
