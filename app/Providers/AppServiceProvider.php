<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Kanban;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('components.titles', function($view){
            $view->with('kanbans', Kanban::get());
        });
    }
}
