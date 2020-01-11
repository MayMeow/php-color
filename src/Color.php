<?php

namespace MayMeow\PHPColor;

use MayMeow\PHPColor\Exceptions\NotHexException;

/**
 * Class Color
 * @package MayMeow\PHPColor
 */
class Color
{
    /** int $red */
    public $red;

    /** int $green */
    public $green;

    /** int $blue */
    public $blue;

    /**
     * Color constructor.
     * @param $red
     * @param $green
     * @param $blue
     */
    public function __construct($red, $green, $blue)
    {
        $this->red = $red;
        $this->green = $green;
        $this->blue = $blue;
    }

    /**
     * Method convertToHex
     * Covert given color to string #RRGGBB
     *
     * @param Color $color
     * @return string
     */
    public static function convertToHex(Color $color)
    {
        $red = dechex($color->red);
        if (strlen($red) < 2) $red = '0' . $red;

        $green = dechex($color->green);
        if (strlen($green) < 2) $green = '0' . $green;

        $blue = dechex($color->blue);
        if (strlen($blue) < 2) $blue = '0' . $blue;

        return '#' . $red . $green . $blue;
    }

    /**
     * Method convertToRGB
     * Convert given color string back to RGB color values
     *
     * @param $hex
     * @return Color
     * @throws NotHexException
     */
    public static function convertToRGB($hex)
    {
        $hex = ltrim($hex, "#");

        if (!ctype_xdigit($hex))
            throw new NotHexException();

        $red = hexdec(substr($hex, 0, 2));
        $green = hexdec(substr($hex, 2, 2));
        $blue = hexdec(substr($hex, 4, 2));

        return new Color($red, $green, $blue);
    }
}