<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Blade;
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
        //
        Blade::directive('makeStrDot', function ($str) {

            $dotStr = substr($str,0,40).'...';
            return  $dotStr;
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // view()->share('locale', app()->getLocale());
        \Debugbar::disable();
        // $categories = Category::all();
        // view()->share('categories', $categories);
    }
}
