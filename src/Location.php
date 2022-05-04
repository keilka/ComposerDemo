<?php 

/*
 * (c) Kate Keil <keilka@miamioh.edu>
 * CSE 451 - Spring 2022
 * Composer Assignment
 * 5/4/22
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace keilka\MyPackage;

// A location for open weather
class Location {
    private $city, $state, $country;

    // Building a new location object
    public function __construct($city, $state, $country) {
        $this->city = $city;
        $this->state = $state;
        $this->country = $country;
    }

    // Returns the city
    public function getCity() {
        return $this->city;
    }

    // Returns the state
    public function getState() {
        return $this->state;
    }

    // Returns the coubtry
    public function getCountry() {
        return $this->country;
    }
}
