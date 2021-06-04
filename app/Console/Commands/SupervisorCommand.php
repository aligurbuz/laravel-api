<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

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
        $this->warn('[program:laravel-worker]
process_name=%(program_name)s_%(process_num)02d
command=php /var/www/html/app/api/artisan queue:work redis --sleep=3 --tries=3 --max-time=3600
autostart=true
autorestart=true
stopasgroup=true
killasgroup=true
numprocs=8
redirect_stderr=true
stdout_logfile=/var/www/html/app/api/worker.log
stopwaitsecs=3600');
        return 0;
    }
}
