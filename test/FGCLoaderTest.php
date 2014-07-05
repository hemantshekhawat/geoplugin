<?php
    use Jairovsky\GeoPlugin\Loader\FGCLoader;

    class FGCLoaderTest extends PHPUnit_Framework_TestCase
    {
        private $loader;
        private $data;

        public function setUp()
        {
            $this->loader = new FGCLoader;
            $this->data = $this->loader->load('173.194.118.24');
        }
        
        public function testLoadingDataFromWebservice()
        {
            $this->assertTrue(is_array($this->data));
        }

        public function testLoadingDataFromWebservice_shouldReturnUnitedStatesAsCountryName()
        {
            $this->assertEquals('United States', $this->data['geoplugin_countryName']);
        }
    }