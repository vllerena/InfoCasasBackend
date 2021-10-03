<?php

namespace App\Providers;

use App\Contracts\TaskContract;
use App\Services\TaskService;
use Illuminate\Support\ServiceProvider;

class ContractServiceProvider extends ServiceProvider
{
    public $bindings = [
        TaskContract::class => TaskService::class,
    ];

    public function register()
    {
        //
    }

    public function boot()
    {
        //
    }
}
