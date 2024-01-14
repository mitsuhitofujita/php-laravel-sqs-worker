<?php

namespace App\Console\Commands\Sqs;

use Illuminate\Console\Command;

class Worker extends Command
{
    /**
     * @var string
     */
    protected $signature = 'sqs:worker';

    /**
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        return 0;
    }
}
