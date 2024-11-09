<?php
// app/Console/Kernel.php

class Kernel
{
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('session:remind')->daily();
        $schedule->command('groups:inactive-check')->dailyAt('00:00');
        $schedule->command('summary:weekly')->weekly();
    }
}
