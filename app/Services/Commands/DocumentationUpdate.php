<?php

namespace App\Services\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;

class DocumentationUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'doc:update {service}';

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
        $service = $this->argument('service');
        $serviceJson = getServiceJson();

        foreach ($serviceJson as $key => $data) {
            if (Str::startsWith($key, Str::ucfirst($service))) {
                Artisan::call('doc:create', ['controller' => lcfirst($data['controller']), 'dir' => lcfirst($data['dir']), 'model' => lcfirst($data['model'])]);
            }
        }

        Artisan::call('postman:create');

        return 0;
    }
}
