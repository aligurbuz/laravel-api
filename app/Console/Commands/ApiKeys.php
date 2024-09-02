<?php

namespace App\Console\Commands;

use App\Models\ApiKey;
use Illuminate\Console\Command;

class ApiKeys extends Command
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
    protected $description = 'get api keys';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle(): void
    {
        $apiKeys = ApiKey::select(['key', 'value'])->orderBy('id', 'desc')->get();

        $this->table(['key', 'value'], $apiKeys, 'box-double');


    }
}
