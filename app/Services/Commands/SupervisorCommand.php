<?php

namespace App\Services\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class SupervisorCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'supervisor';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'get supervisor conf content';

    /**
     * @var array|string[]
     */
    protected array $contents = [];

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $basePath = isLocale() ? base_path() : '/var/www/html/app';

        $this->contents = ['laravel-redis-worker' => '[program:laravel-worker]
process_name=%(program_name)s_%(process_num)02d
command=php '.$basePath.'/artisan queue:work redis --sleep=3 --tries=3 --max-time=3600
autostart=true
autorestart=true
stopasgroup=true
killasgroup=true
numprocs=8
redirect_stderr=true
stdout_logfile='.$basePath.'/worker.log
stopwaitsecs=3600'];
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $supervisorPath = '/etc/supervisor/conf.d/';

        foreach ($this->contents as $file => $content){
            $supervisorFile = $supervisorPath.''.$file.'.conf';
            File::put($supervisorFile,$content);
            $this->warn($supervisorFile.' has been added to supervisor');
        }

        exec('sudo service supervisor start');
        exec('sudo service supervisor force-reload');
        exec('sudo service supervisor start');
        return 0;
    }
}
