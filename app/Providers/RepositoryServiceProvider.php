<?php

namespace App\Providers;

use App\Repositories\Contracts\JobRepositoryContract;
use App\Repositories\JobRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //
    }

    public function register()
    {
        $this->app->bind(JobRepositoryContract::class, JobRepository::class);
    }
}
