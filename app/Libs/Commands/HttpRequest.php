<?php

namespace App\Libs\Commands;

use App\Constants;
use App\Facades\Support\Http\Local\Local;
use App\Libs\AppContainer;
use Illuminate\Console\Command;
use Illuminate\Support\Str;
use JetBrains\PhpStorm\NoReturn;
use Laravel\Octane\Exceptions\DdException;

class HttpRequest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'http';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Http request for console';

    /**
     * Execute the console command.
     *
     * @throws DdException
     */
    #[NoReturn] public function handle(): void
    {
        $endpoint = $this->ask('endpoint');
        $id = $this->ask('userCode',1);
        $method = $this->ask('Which http method will be used to send the request? (get, post, put)','get');
        $range = $this->ask('range values','desc');

        $endpoint = Str::camel($method.'_'.$endpoint);

        AppContainer::setWithTerminating(Constants::userCodeForFakeAuth, $id);

        $response = Local::{$endpoint}(['range' => $range]);

        dd($response);
    }
}
