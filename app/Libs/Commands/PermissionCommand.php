<?php

namespace App\Libs\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class PermissionCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'permission';

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
        $list = \App\Libs\Route::get();

        if (count($list)) {
            DB::table('permissions')->delete();

            foreach ($list as $endpoint) {
                $createList = [];
                $createList['endpoint'] = $endpoint;
                $createList['description'] = $endpoint;
                $createList['permission_code'] = crc32($endpoint);

                DB::table('permissions')->where('permission_code', $createList['permission_code'])->delete();
                DB::table('localizations')->where('localized_code', $createList['permission_code'])->delete();

                DB::table('permissions')->insert($createList);
            }

            $this->warn('permission updating has been successfully');
        }

        return 0;
    }
}
