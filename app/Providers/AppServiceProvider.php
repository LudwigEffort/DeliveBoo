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
            // this data should move in .env file (with enviroment variables)
            return new Gateway(
                [
                    'environment' => 'sandbox',
                    'merchantId' => 'spx9zbh42swtm46q',
                    'publicKey' => 'nxsncsnfw3fpwvg2',
                    'privateKey' => '09e84d6733908754678240f76f928e7a'
                ]
            );
        });
    }
}
