<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use stdClass;

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

        View::share('requestInfo', $this->app->request);

        View::composer('*', function ($view) {

            $user = Auth::check()
                    ? Auth::user()
                    : null;
            $view->with('user', $user);
        });


    }
}
