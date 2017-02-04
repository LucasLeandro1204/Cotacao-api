<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CleanCsv extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'csv:clean';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get and clean csv';

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
