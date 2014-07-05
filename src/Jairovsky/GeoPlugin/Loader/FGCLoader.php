<?php

    namespace Jairovsky\GeoPlugin\Loader;
    /**
    * Fetch data from geoplugin.com webservice using {@link http://php.net/file_get_contents file_get_contents}
    */
    class FGCLoader extends AbstractLoader
    {
        
        /**
        * @inheritdoc
        */
        public function load($ip)
        {
            $url = $this->createServiceURL($ip);
            return unserialize(file_get_contents($url));
        }
    }