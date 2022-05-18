<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Factory\Factory;

class DeploymentController extends Controller
{
    /**
     * @var string
     */
    protected string $branch = 'master';

    /**
     * Controller method that handles deployment requests.
     *
     * @return string
     */
    public function handle(): string
    {
        $deployKey = request()->segment(2);

        if ($deployKey == config('deployment.key')) {
            $deployment = exec('cd ' . base_path() . ' && git pull origin ' . $this->branch);
            Factory::notify()->deployment($deployment);

            return $deployment;
        }

        return 'deploy key invalid';
    }
}
