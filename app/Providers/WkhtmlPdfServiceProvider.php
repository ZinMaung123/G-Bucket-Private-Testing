<?php

namespace App\Providers;

use App\Services\WkhtmlPdf;
use Illuminate\Support\ServiceProvider;

class WkhtmlPdfServiceProvider extends ServiceProvider 
{

    protected $defer = true;

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(WkhtmlPdf::class, function($app){
           return new WkhtmlPdf($app['config']['wkhtml_pdf']);
        });
    }

    public function provides()
    {
        return [WkhtmlPdf::class];
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
