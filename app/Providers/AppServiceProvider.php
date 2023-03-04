<?php

namespace App\Providers;

use Braintree\Gateway;
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
        $this->app->singleton(Gateway::class, function($app){

            return new Gateway (
                    [
                        'environment' => 'sandbox',
                        'merchantId'  => 'c8ssqb7yw6hr9sqk',
                        'publicKey'   => 'vgh72xk5wgcm3v2t',
                        'privateKey'  => 'acb71b18d582570a518596e4559585b2',

                    ]
                );

        });

    }
}
