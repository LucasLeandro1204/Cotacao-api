<?php

namespace App\Console\Commands;

use App\Rate;
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
        $this->info('Getting csv');

        $date = date('Ymd');
        $csv = @file_get_contents('http://www4.bcb.gov.br/Download/fechamento/'.$date.'.csv');

        if (!$csv) {
            $this->error("Today's date does not have records associated!");
            return;
        }

        $this->info('Cleaning the csv');

        $split = preg_split('/\r\n/', $csv);
        array_pop($split); // Removed because it's empty

        $this->info('Inserting data into Rates table');

        $progress = $this->output->createProgressBar(count($split));

        foreach ($split as $key => $values) {
            $value = explode(';', $values);

            Rate::updateOrCreate(
                ['initials' => $value[3]],
                [
                    'type' => $value[2],
                    'buy' => $value[4],
                    'sell' => $value[5],
                ]
            );

            $progress->advance();
        }

        $progress->finish();

        $this->info("\n" . 'Finished!');
    }
}
