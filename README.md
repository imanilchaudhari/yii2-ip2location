Yii2 IP2Location
=======================
This extension provides the IP2Location integration for the Yii2 framework.

Installation
------------
*   [Download](http://www.yiiframework.com/extension/yii2-ip2location/files/IP2Location.zip).
*   Extract this package to frontend/components

``` Composer installation is coming soon. ```

Quick Start
-----------

Use the following methods to retrieve geolocation information. * Add following lines into main.php configuration file:
```php

'components' => [
     'ip2location' => [
        'class' => '\frontend\components\IP2Location\Geolocation',
        'database' => __DIR__ .DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'components'.DIRECTORY_SEPARATOR.'IP2Location'.DIRECTORY_SEPARATOR.'IP2LOCATION-LITE-DB1.BIN',
        'mode' => 'FILE_IO',
    ],
]
```

Usage
-----
```php
$ip = Yii::$app->request->userIP

$countryCode = Yii::$app->ip2location->getCountryCode($ip);
$countryName = Yii::$app->ip2location->getCountryName($ip);
$regionName = Yii::$app->ip2location->getRegionName($ip);
$cityName = Yii::$app->ip2location->getCityName($ip);
$latitude = Yii::$app->ip2location->getLatitude($ip);
$longitude = Yii::$app->ip2location->getLongitude($ip);
$isp = Yii::$app->ip2location->getISP($ip);
$domainName = Yii::$app->ip2location->getDomainName($ip);
$zipCode = Yii::$app->ip2location->getZIPCode($ip);
$timeZone = Yii::$app->ip2location->getTimeZone($ip);
$netSpeed = Yii::$app->ip2location->getNetSpeed($ip);
$iddCode = Yii::$app->ip2location->getIDDCode($ip);
$areaCode = Yii::$app->ip2location->getAreaCode($ip);
$weatherStationCode = Yii::$app->ip2location->getWeatherStationCode($ip);
$weatherStationName = Yii::$app->ip2location->getWeatherStationName($ip);
$mcc = Yii::$app->ip2location->getMCC($ip);
$mnc = Yii::$app->ip2location->getMNC($ip);
$mobileCarrierName = Yii::$app->ip2location->getMobileCarrierName($ip);
$elevation = Yii::$app->ip2location->getElevation($ip);
$usageType = Yii::$app->ip2location->getUsageType($ip);
```
Key Notes
---------

You must have enabled php_gmp.dll extension in php.ini
```
extension=php_gmp.dll
```


Database Update
---------------

IP2Location database is updated monthly. You can get the latest database from http://www.ip2location.com (Commercial version) or http://lite.ip2location.com (Free version).

Resources
---------
[IP2Location](http://www.ip2location.com/).
