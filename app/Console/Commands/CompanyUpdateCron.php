<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CompanyUpdateCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Compaines:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Updated the teamwork CRM data in compaines';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
    }
}
