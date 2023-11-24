<?php

namespace App\Console\Commands;

use App\Exceptions\Exception;
use Illuminate\Console\Command;

class ApiKey extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'key {key}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'get/set api key';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle(): void
    {
        $key = $this->argument('key');
        $apiKey = config('apikey.' . $key);

        if (is_null($apiKey)) {
            Exception::customException('invalid api key');
        }

        $this->info(ucfirst($key) . ' Apikey : ' . $apiKey);
    }
}
