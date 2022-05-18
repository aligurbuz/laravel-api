<?php

namespace App\Services\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class DocumentationUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'doc:update';

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
        $docMap = base_path('app/Docs') . '/map.json';
        $docMapContent = File::get($docMap);

        $docMapContent = str_replace('/var/www/html/app/api', base_path(), $docMapContent);

        File::put($docMap, $docMapContent);

        return 0;
    }
}
