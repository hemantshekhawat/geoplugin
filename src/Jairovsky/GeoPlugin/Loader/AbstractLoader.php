<?php

    namespace Jairovsky\GeoPlugin\Loader;
    /**
    * AbstractLoader serves as a base for concrete {@link \Jairovsky\GeoPlugin\Loader\Loader} implementations.
    */
    abstract class AbstractLoader implements Loader
    {
        /**
        * URL of geoplugin.com webservice
        */
        protected $serviceUrl = 'http://www.geoplugin.net/php.gp';

        /**
        * Generates an request URL for geoplugin.com webservice.
        * @param $ip string The IP that will be used in the webservice request
        * @return string A URL in a format like http://www.geoplugin.net/php.gp?ip=xxx.xxx.xxx.xxx
        */
        protected function createServiceURL($ip)
        {
            $query = http_build_query(array('ip'=>$ip));
            return $this->serviceUrl.'?'.$query;
        }

        /**
        * @inheritdoc
        */
        public abstract function load($ip);
    }