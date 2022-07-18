<?php 

namespace nimadeve\ferz;

use Illuminate\Support\Facades\Facade;

class FerzFacade extends Facade {

    public static function getFacadeAccessor()
    {
        return "Ferz";
    }
}