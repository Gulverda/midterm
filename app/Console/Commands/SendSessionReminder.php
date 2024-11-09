<?php

// app/Console/Commands/SendSessionReminder.php
namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendSessionReminder extends Command
{
    protected $signature = 'session:remind';

    public function handle()
    {
        // Send email reminders
    }
}
