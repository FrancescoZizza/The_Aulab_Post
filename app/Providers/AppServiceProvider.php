<?php

namespace App\Providers;

use App\Models\Tag;
use App\Models\Category;
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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
        Fortify::loginView(function (){
            return view('auth.login');
        });

        Fortify::registerView(function (){
            return view('auth.register');
        });

        if(Schema::hasTable('categories')){
            $categories = Category::all();
            View::share(['categories' => $categories]);
        }

        if(Schema::hasTable('tags')){
            $tags = Tag::all();
            View::share(['tags' => $tags]);
        }
    }


}
