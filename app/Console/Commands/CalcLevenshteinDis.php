<?php

namespace App\Console\Commands;

use App\Helper\Helper;
use Illuminate\Console\Command;

class CalcLevenshteinDis extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'calcLevenshteinDis {firstString} {secondString}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {
        $data = $this->arguments();
        print Helper::levenshtein_dis($data['firstString'], $data['secondString']);

        return Helper::levenshtein_dis($data['firstString'], $data['secondString']);
    }
}
