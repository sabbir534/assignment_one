<?php

/**
 * Write a PHP Script to convert a temperature of 32 degrees to Fahrenheit.
 * Store just the value in a variable, no need to store the unit(Celsius)
 */

// °F = °C(9 / 5) + 32


$celsius = 32;
$fahrenheit = $celsius * (9 / 5) + 32;

printf("The temperature of %d°C = %.2f°F", $celsius, $fahrenheit);
