<?php

namespace App\Console\Commands\Queue;

use App\Facades\Support\Email\Email;
use App\Libs\Reflection;
use App\Services\Queue\Process;
use Illuminate\Console\Command;

class Publish extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'queue:publish';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle(): void
    {
        $data = [
            "to" => "ali@haxr.com",
            "subject" => "Mail Subject",
            "content" => []
        ];

        Email::publish($data,'test');

        $this->output->success('queue publishing is success');
    }
}
