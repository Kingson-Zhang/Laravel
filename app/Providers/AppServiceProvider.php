<?php

namespace App\Providers;

use App\Http\Controllers\Home;
use App\Models\User;
use Illuminate\Support\ServiceProvider;
use App\Models\UserModel;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->when(Home::class)
                  ->needs(UserModel::class)
                  ->give(function () {
                      return new UserModel();
                  });
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
