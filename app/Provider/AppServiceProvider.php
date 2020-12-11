<?php

namespace App\Provider;

use App\Exception\TableNotFoundSolutionProvider;
use Facade\Ignition\SolutionProviders\SolutionProviderRepository as SolutionProvidersSolutionProviderRepository;
use Facade\IgnitionContracts\SolutionProviderRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Model::unguard();
    }
}
