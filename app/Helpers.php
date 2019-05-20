<?php

if (! function_exists('get_array_of_cities')) {
    /**
    * Checks if a value exists in an array in a case-insensitive manner
    *
    * @param mixed $needle
    * The searched value
    *
    * @param $haystack
    * The array
    *
    * @param bool $strict [optional]
    * If set to true type of needle will also be matched
    *
    * @return bool true if needle is found in the array,
    * false otherwise
    */
    function get_array_of_cities() {
        $cities_elq = City::all();
        $cities_array = array();

        foreach($cities_elq as $city_elq)
        {
            $cities_array[$city_elq->id] = $city_elq->city_name;
        }

        return $cities_array;
    }
}

?>