<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            if (auth()->check()) {
                $cartCount = DB::table('cart')
                    ->where('user_id', auth()->user()->id)
                    ->count();
            } else {
                $cartCount = 0;
            }
    
            $view->with('cartCount', $cartCount);
        });
    }
}
