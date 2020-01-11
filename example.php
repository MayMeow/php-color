<?php

use MayMeow\PHPColor\Color;

require_once 'vendor/autoload.php';

$color = new Color(198, 255, 32);

$hex = Color::convertToHex($color);
var_dump($hex);

try {
    $color = Color::convertToRGB($hex);
    var_dump($color);
} catch (\MayMeow\PHPColor\Exceptions\NotHexException $exception)
{
    // do something
}
