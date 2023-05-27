<?php

namespace Ahad\Randomer\Providers;

use Illuminate\Support\ServiceProvider;

class RandomerProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }
}
