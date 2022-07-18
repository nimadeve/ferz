<?php 

namespace nimadeve\ferz;


class Ferz{

    public function arrayRemove($array , $condition)
    {
        // name == nima
        // items.*.name == nima
        // items.*.options.*.name = nima 

        unset($array[$condition]);
        return $array;
    }
}