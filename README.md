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
//...
```

```php
// ...
$color = new Color(198, 255, 32);
$hex = Color::convertToHex($color); //#c6ff20
```

and back to RGB

```php
// ...
$rgb = Color::convertToRGB("#c6ff20"); // color object: Color(198, 255, 32)
```

## License
MIT