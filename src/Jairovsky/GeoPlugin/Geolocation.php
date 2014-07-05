<?php
    
    namespace Jairovsky\GeoPlugin;

    /**
    * Holds the geolocation data of a specific IP.
    */
    class Geolocation
    {
        private $_data;
        
        /**
        * @param $data array the array returned from the geoplugin.com webservice.
        */
        public function __construct($data)
        {
            $this->_data = $data;
        }

        /**
        * Returns a geolocation property of the IP, such as country, city, et cetera.
        * The complete list of properties is at {@link http://www.geoplugin.com/webservices/php}.
        * @param $property string the name of the requested property.
        * @return string The value of the requested property.
        */
        public function getProperty($property)
        {
            return $this->_data['geoplugin_'.$property];
        }
    }