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


    public function arraySelect($array , $select = [])
    {
        # [name,family,cars.model]
        return [];
    }

    public function arrayAddParams($array , $where , $value)
    {
        /*
           where ->    items.products.options.model  (model not exist)
           value ->   value
        */
        return [];
    }
}