jairovsky/geoplugin
===================

![Build status](https://api.travis-ci.org/jairovsky/geoplugin.svg?branch=master)

Is a tiny little PHP 5.3+ wrapper library for [GeoPlugin](http://geoplugin.com) webservice.
This library is my first composer project, so bear with me in case of any silly error.

## Installation
Add the following line to your ```composer.json``` file require section:
```json
"jairovsky/geoplugin": "dev-master"
```
and run ```composer update```.

## Usage
Once installed, just use it like this:

```php
use Jairovsky\GeoPlugin\Factory;

$ip = '173.194.118.3'; // example IP address

$factory = new Factory;

$geolocation = $factory->getGeolocation($ip);

print $geolocation->getProperty('countryName'); // prints 'United States'
print $geolocation->getProperty('city');
//et cetera
...
```
For the full list of properties, take a look at the [geoplugin documentation](http://www.geoplugin.com/webservices/php).


## Plans for the future
- Add a validator for IP addresses
- Add a caching mechanism
- Add a domain name resolver so we can get geolocation data for domain names

## Tests
Since this package has no dev. dependencies, to run the tests you just need to run ```composer install``` and then ```phpunit``` .
