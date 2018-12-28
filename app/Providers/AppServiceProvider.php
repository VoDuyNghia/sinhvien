<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::Share('objCats0',Category::Where('id_category', '=' , 1)->orwhere('id_category', '=' , 4)->get());
        View::Share('objCats1',Category::Where('id_category', '=' , 2)->get());
        View::Share('objCats2',Category::Where('id_category', '=' , 3)->get());
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
