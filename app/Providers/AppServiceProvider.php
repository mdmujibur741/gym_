<?php

namespace App\Providers;

use App\Http\Resources\FooterResource;
use App\Http\Resources\PackageResource;
use App\Models\Footer;
use App\Models\Package;
use Illuminate\Support\Facades\View;
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
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $FOOTERS = FooterResource::collection(Footer::first()->get());
        View::share('FOOTERS', $FOOTERS);
    }
}
