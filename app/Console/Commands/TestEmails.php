<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
// import HolidayPending
use App\Mail\HolidayPending;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class TestEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:emails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        $user = User::find(1);
        Mail::to($user)->send(new HolidayPending);
    }
}
