<?php

use MayMeow\PHPColor\Color;

require_once 'vendor/autoload.php';

$color = new Color(198, 255, 32);

var_dump(Color::convertToRGB(Color::convertToHex($color)));