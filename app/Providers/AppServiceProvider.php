<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Model\Category;
use App\Model\Setting;
use App\Model\Tag;
use App\Model\SocialMedia;

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
        Schema::defaultStringLength(191);
        
        $categoriess = Category::take(7)->get();
        view::share('categoriesmenu', $categoriess);
        
        $settings = Setting::first();
        view::share('settings', $settings); 

        $tags = Tag::take(7)->get();
        view::share('tags', $tags);
        
        $socialmedia = SocialMedia::take(4)->get();
        view::share('socialmedia', $socialmedia);
    }
}
