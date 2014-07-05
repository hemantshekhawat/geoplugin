<?php

    namespace Jairovsky\GeoPlugin\Loader;
    /**
    * A strategy for loading data from geoplugin.com
    */
    interface Loader {

        /**
        * Loads geolocation data for the given address
        * @param $ip string The IP address for which the data will be loaded
        * @return mixed The geolocation data relative to the given IP address
        */
        public function load($ip);
    }