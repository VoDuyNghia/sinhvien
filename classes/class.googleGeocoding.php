<?php
/**
 * Google Geocoding API
 *
 * Copyright (C) 2018 Allure Web Solutions <info@allurewebsolutions.com>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA
 *
 * This class requires a google geocoding api key
 * which you can take for free from https://developers.google.com/maps/documentation/geocoding/start
 *
 * @class        googleHelper
 * @version      v1.0 23 June 2018
 * @author       Allure Web Solutions <info@allurewebsolutions.com>
 * @copyright    2018 Allure Web Solutions
 */
/*
//Test usage :
$apiKey = 'ABQIAAAArVQcVxX32bZ7slezKjYHNxRRy';
$obj = new googleGeocoding($apiKey);
print '<pre>';
print_r($obj->getCoordinates('1600 Amphitheatre Pkwy, Mountain View, CA 94043'));
print '</pre>';
*/
class googleGeocoding {
	/**
	 * The Google Geocoding API key holder
	 * @var string
	 */
	private $apiKey;
	/**
	 * googleGeocoding constructor.
	 *
	 * @param string $apiKey
	 *
	 * @throws Exception
	 */
	public function __construct( $apiKey = '' ) {
		if ( $apiKey ) {
			$this->apiKey = $apiKey;
		} else {
			throw new Exception( __CLASS__ . ' error : You must set your API key before using this class!' );
		}
	}
	/**
	 * Get address, latitude, longitude from address
	 *
	 * @param $address
	 *
	 * @return array|bool
	 */
	public function getCoordinates( $address ) {
		$address = urlencode( $address );
		$url     = "https://maps.googleapis.com/maps/api/geocode/json?address={$address}key={$this->apiKey}";
		$resp    = json_decode( file_get_contents( $url ), true );
		if ( $resp['status'] === 'OK' ) {
			$formatted_address = $resp['results'][0]['formatted_address'] ?? '';
			$lat               = $resp['results'][0]['geometry']['location']['lat'] ?? '';
			$long              = $resp['results'][0]['geometry']['location']['lng'] ?? '';
			return array( 'address' => $formatted_address, 'lat' => $lat, 'long' => $long );
		}
		return false;
	}
}