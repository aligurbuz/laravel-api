<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ApiKey extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'keys';

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
        $apiKeys = \App\Models\ApiKey::all(['key','value']);

        $this->table(['key', 'value'], $apiKeys,'box-double');


    }
}
