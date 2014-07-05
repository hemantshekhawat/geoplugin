<?php

    namespace Jairovsky\GeoPlugin;

    use Jairovsky\GeoPlugin\Loader\FGCLoader,
        Jairovsky\GeoPlugin\Geolocation;

    /**
    * Factory is the class responsible for tying up the library.
    */
    class Factory
    {
        /**
        * A concrete implementation of {@link \Jairovsky\GeoPlugin\Loader\Loader}.
        */
        private $loader;

        public function __construct()
        {
            $this->loader = new FGCLoader;
        }


        /**
        * Creates a {@link \Jairovsky\GeoPlugin\Geolocation} object with data loaded from geoplugin.com webservice
        * @param $ip string The IP address for which the data will be loaded
        * @return \Jairovsky\GeoPlugin\Geolocation geolocation object with data loaded from geoplugin.com webservice 
        */
        public function getGeolocation($ip)
        {
            $data = $this->loadData($ip);
            $geolocation = new Geolocation($data);

            return $geolocation;
        }

        private function loadData($ip)
        {
            return $this->loader->load($ip);
        }

        public function setLoader($loader)
        {
            $this->loader = $loader;
        }
    }