<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Event;
class ExpireEvents extends Command
{

    protected $signature = 'expire:events';


    protected $description = 'Set expired field true in events database';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        Event::expirePastEvents(); 
    }
}
