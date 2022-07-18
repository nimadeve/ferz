<?php

namespace nimadeve\ferz;

use Illuminate\Support\ServiceProvider;

class FerzPackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        # code...
    }

    public function register()
    {
        $this->app->bind("Ferz",function(){
            return new nimadeve\ferz\Ferz();
        });
    }
}
