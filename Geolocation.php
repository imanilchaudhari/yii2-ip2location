<?php
namespace frontend\components\IP2Location;

use Yii;
use yii\base\Component;

use \frontend\components\IP2Location\IP2LocationRecord;
use \frontend\components\IP2Location\IP2Location;

/**
 * +----------------------------------------------------------------------+
 * | Copyright (C) 2015 IP2Location                                       |
 * +----------------------------------------------------------------------+
 * | This library is free software; you can redistribute it and/or        |
 * | modify it under the terms of the GNU Lesser General Public           |
 * | License as published by the Free Software Foundation; either         |
 * | version 2.1 of the License, or (at your option) any later version.   |
 * |                                                                      |
 * | This library is distributed in the hope that it will be useful,      |
 * | but WITHOUT ANY WARRANTY; without even the implied warranty of       |
 * | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU    |
 * | Lesser General Public License for more details.                      |
 * |                                                                      |
 * | You should have received a copy of the GNU Lesser General Public     |
 * | License along with this library; if not, write to the Free Software  |
 * | Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 |
 * | USA, or view it online at http://www.gnu.org/licenses/lgpl.txt.      |
 * +----------------------------------------------------------------------+
 * | Authors: IP2Location <support@ip2location.com>                       |
 * +----------------------------------------------------------------------+
 *
 * @category Net
 * @package  IP2Location
 * @author IP2Location <support@ip2location.com>
 * @license  LGPL http://www.gnu.org/licenses/lgpl.txt
 */
/**
 * Geolocation class file.
 *
 * @author IP2Location <support@ip2location.com>
 * @link http://www.yiiframework.com/
 * @version 2.0
 */





class Geolocation extends Component {
	public $database = './IP2LOCATION-LITE-DB1.BIN';
	public $mode;

	protected static $ip2location;

	public function init() {
		switch($this->mode) {
			case 'MEMORY_CACHE':
				$flags = IP2Location::MEMORY_CACHE;
			break;

			case 'SHARED_MEMORY':
				$flags = IP2Location::SHARED_MEMORY;
			break;

			default:
				$flags = IP2Location::FILE_IO;
			break;
		}

		self::$ip2location = new IP2Location($this->database, $flags);

		parent::init();
	}

	public function getCountryCode($ip=NULL) {
		return self::$ip2location->lookup(self::getIP($ip), IP2Location::COUNTRY_CODE);
	}

	public function getCountryName($ip=NULL) {
		return self::$ip2location->lookup(self::getIP($ip), IP2Location::COUNTRY_NAME);
	}

	public function getRegionName($ip=NULL) {
		return self::$ip2location->lookup(self::getIP($ip), IP2Location::REGION_NAME);
	}

	public function getCityName($ip=NULL) {
		return self::$ip2location->lookup(self::getIP($ip), IP2Location::CITY_NAME);
	}

	public function getLatitude($ip=NULL) {
		return self::$ip2location->lookup(self::getIP($ip), IP2Location::LATITUDE);
	}

	public function getLongitude($ip=NULL) {
		return self::$ip2location->lookup(self::getIP($ip), IP2Location::LONGITUDE);
	}

	public function getISP($ip=NULL) {
		return self::$ip2location->lookup(self::getIP($ip), IP2Location::ISP);
	}

	public function getDomainName($ip=NULL) {
		return self::$ip2location->lookup(self::getIP($ip), IP2Location::DOMAIN_NAME);
	}

	public function getZIPCode($ip=NULL) {
		return self::$ip2location->lookup(self::getIP($ip), IP2Location::ZIP_CODE);
	}

	public function getTimeZone($ip=NULL) {
		return self::$ip2location->lookup(self::getIP($ip), IP2Location::TIME_ZONE);
	}

	public function getNetSpeed($ip=NULL) {
		return self::$ip2location->lookup(self::getIP($ip), IP2Location::NET_SPEED);
	}
	public function getIDDCode($ip=NULL) {
		return self::$ip2location->lookup(self::getIP($ip), IP2Location::IDD_CODE);
	}

	public function getAreaCode($ip=NULL) {
		return self::$ip2location->lookup(self::getIP($ip), IP2Location::AREA_CODE);
	}

	public function getWeatherStationCode($ip=NULL) {
		return self::$ip2location->lookup(self::getIP($ip), IP2Location::WEATHER_STATION_CODE);
	}

	public function getWeatherStationName($ip=NULL) {
		return self::$ip2location->lookup(self::getIP($ip), IP2Location::WEATHER_STATION_NAME);
	}

	public function getMCC($ip=NULL) {
		return self::$ip2location->lookup(self::getIP($ip), IP2Location::MCC);
	}

	public function getMNC($ip=NULL) {
		return self::$ip2location->lookup(self::getIP($ip), IP2Location::MNC);
	}

	public function getMobileCarrierName($ip=NULL) {
		return self::$ip2location->lookup(self::getIP($ip), IP2Location::MOBILE_CARRIER_NAME);
	}

	public function getElevation($ip=NULL) {
		return self::$ip2location->lookup(self::getIP($ip), IP2Location::ELEVATION);
	}

	public function getUsageType($ip=NULL) {
		return self::$ip2location->lookup(self::getIP($ip), IP2Location::USAGE_TYPE);
	}

	protected function getIP($ip=NULL) {
		return ($ip) ? $ip : Yii::app()->getRequest()->getUserHostAddress();
	}
}