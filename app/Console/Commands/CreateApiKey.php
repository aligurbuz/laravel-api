<?php

namespace App\Console\Commands;

use App\Facades\Database\Authenticate\ApiKey;
use Illuminate\Console\Command;

class CreateApiKey extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:key';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'set api key';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle(): void
    {
        $name = $this->ask('key name');

        ApiKey::create($name);

        $this->call('keys');
    }
}
