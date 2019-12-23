<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use View;
use Auth;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $path = 'public/panel';
        View::share('css_path', $path.'/css');
        View::share('js_path', $path.'/js');
        View::share('img_path', $path.'/img');
        View::share('plugin_path', $path.'/plugins');
        View::share('boot_path', $path.'/bootstrap');

        view()->composer('*', function($view){
            $user = Auth::user();
            $view->with('auth', $user);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
