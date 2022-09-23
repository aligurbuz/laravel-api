<?php

namespace App\Services\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Symfony\Component\Yaml\Yaml;

class EnvironmentCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'environment {name} {databaseName?}';

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
        $envFile = File::get('.env');
        $name = $this->argument('name');
        $databaseName = $this->argument('databaseName');

        $dockerCompose = File::get('docker-compose.yml');
        $dockerComposeList = Yaml::parse($dockerCompose);
        $database = $dockerComposeList['services']['mysql']['environment'] ?? [];

        $change = str_replace('APP_ENV=local', 'APP_ENV=' . $name . '', $envFile);
        $change = str_replace('REPOSITORY_CACHE = false', 'REPOSITORY_CACHE=true', $change);

        if (!is_null($databaseName)) {
            $change = str_replace('DB_DATABASE=api', 'DB_DATABASE=' . $databaseName, $change);
        }

        if ($name !== 'local' && isset($database['MYSQL_ROOT_PASSWORD'])) {
            $change = str_replace('DB_PASSWORD=root', 'DB_PASSWORD=' . $database['MYSQL_ROOT_PASSWORD'], $change);
        }

        File::put('.env', $change);

        $this->warn('environment has been changed');
        return 0;
    }
}
