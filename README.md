# PHP Color

🌈 Color conversion from RGB to HEX and back.

## Instalation

Trough composer:

```
composer require maymeow/php-color
```

## Using

Convert color to hex

```php
use MayMeow\PHPColor\Color;
// ...
$color = new Color(198, 255, 32);
$hex = Color::convertToHex($color); //#c6ff20
```

and back to RGB

```php
use MayMeow\PHPColor\Color;
// ...
try {
    $rgb = Color::convertToRGB($hex); // color object: Color(198, 255, 32)
} catch (\MayMeow\PHPColor\Exceptions\NotHexException $exception)
{
    // do something, echo message or log ...
}

```

You can check `example.php` file in project sources.

## License

MIT