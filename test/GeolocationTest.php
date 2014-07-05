<?php
    
    use Jairovsky\GeoPlugin\Geolocation;

    class GeolocationTest extends PHPUnit_Framework_TestCase
    {
        public function testWithHardCodedArray()
        {
            $data = array(
                'geoplugin_country'    => 'Brazil',
                'geoplugin_regionName' => 'São Paulo'
            );

            $geo = new Geolocation($data);

            $this->assertEquals('Brazil', $geo->getProperty('country'));
            $this->assertEquals('São Paulo', $geo->getProperty('regionName'));
        }
    }