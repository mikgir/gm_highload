<?php

namespace App\Providers;

use App\Services\BubbleSort;
use App\Services\BubbleSortInterface;
use Illuminate\Support\ServiceProvider;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpKernel\Log\Logger;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(LoggerInterface::class, Logger::class);
        $this->app->bind(BubbleSortInterface::class, BubbleSort::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
