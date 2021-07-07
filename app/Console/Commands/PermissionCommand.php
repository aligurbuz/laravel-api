<?php

namespace App\Console\Commands;

use App\Repositories\Repository;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

class PermissionCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'permissions';

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
        $routes = collect(Route::getRoutes())->map(function ($route) { return $route->uri(); })->toArray();

        $list = [];

        foreach ($routes as $key => $route){
            if(Str::startsWith($route,'api/')){
                $endpoint = str_replace('api/','',$route);
                if(!in_array($endpoint,$list,true)){
                    $list[] = $endpoint;
                }
            }
        }

        foreach ($list as $endpoint){
            $createList = [];
            $createList['endpoint'] = $endpoint;
            $createList['description'] = $endpoint;
            $createList['permission_code'] = crc32($endpoint);

            Repository::permission()->create([$createList]);
        }

        $this->warn('permission updating has been successfully');

        return 0;
    }
}
