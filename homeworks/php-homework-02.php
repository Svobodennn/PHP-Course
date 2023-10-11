<?php

$planets = [
    "Mercury",
    "Venus",
    "Earth",
    "Mars",
    "Jupiter",
    "Saturn",
    "Uranus",
    "Neptune",
    "",
    "",
    NULL];


function returnPlanets($planets, $number)
{
    $filtered_planets = array_filter($planets, function ($planet) {
        if ($planet != null || $planet != "") {
            return $planet;
        }
    });

    $randomizedIndex = array_rand($filtered_planets,$number);

    $result = array_map(function ($key) use ($filtered_planets){
        return $filtered_planets[$key];
    },$randomizedIndex);

    return $result;


}

echo "<pre>";
print_r(returnPlanets($planets, 2));
print_r(returnPlanets($planets, 3));
print_r(returnPlanets($planets, 2));
print_r(returnPlanets($planets, 4));
print_r(returnPlanets($planets, 5));