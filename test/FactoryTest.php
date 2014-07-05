<?php

    use Jairovsky\GeoPlugin\Factory;

    class FactoryTest extends PHPUnit_Framework_TestCase
    {
        
        public function testFactoryWithDefaults()
        {
            $factory = new Factory;
            $geo = $factory->getGeolocation('173.194.118.24');
            $this->assertTrue(is_object($geo));
        }

        public function testGeolocation_getProperty_shouldReturnUnitedStatesAsCountryName()
        {
            $factory = new Factory;
            $geo = $factory->getGeolocation('173.194.118.24');
            $this->assertEquals('United States', $geo->getProperty('countryName'));
        }
    }