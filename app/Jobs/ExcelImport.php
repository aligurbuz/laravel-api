<?php

namespace App\Jobs;

use App\Factory\Factory;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ExcelImport implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * @var array
     */
    protected array $data = [];

    /**
     * Create a new job instance.
     *
     * @param string $file
     * @param string $model
     */
    public function __construct(string $file, string $model)
    {
        $this->data['file'] = $file;
        $this->data['model'] = $model;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Factory::excel($this->data)->import();
    }
}
