# Memoization

Wrapper for Ed Mann's memoize function

see https://eddmann.com/posts/implementing-and-using-memoization-in-php/

## Install

Via Composer

``` bash
$ composer require kdaviesnz/Memoization
```

## Usage

``` php

        $sleepz = \kdaviesnz\memoization\Memoization::memoize(function($time){
            sleep( $time );
            return true;
        });

        $firstTestStart = \microtime(true);
        $sleepz(1);
        $firstTestEnd = \microtime(true);

        $secondTestStart = \microtime(true);
        $sleepz(1);
        $secondTestEnd = \microtime(true);

        $firstTestTime = $firstTestEnd - $firstTestStart;
        $secondTestTime = $secondTestEnd - $secondTestStart;

        echo "First test took $firstTestTime ms\n";
        echo "Second test took $secondTestTime ms\n";

```

## Change log

Please see CHANGELOG.md for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see CONTRIBUTING.md and CODE_OF_CONDUCT.md for details.

## Security

If you discover any security related issues, please email kdaviesnz@gmail.com instead of using the issue tracker.

## Credits

- kdaviesnz@gmail.com

## License

The MIT License (MIT). Please see LICENSE.md for more information.

# Memoization
