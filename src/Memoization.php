<?php
declare(strict_types = 1);

namespace kdaviesnz\memoization;

/**
 * Class Memoization
 * @package kdaviesnz\memoization
 */
class Memoization
{
    /**
     * @param callable $func
     *
     * @see https://eddmann.com/posts/implementing-and-using-memoization-in-php/
     * @return \Closure
     */
    public static function memoize(callable $func)
    {
        return function() use ($func)
        {
            static $cache = [];

            $args = func_get_args();
            $key = md5(serialize($args));

            if ( ! isset($cache[$key])) {
                $cache[$key] = call_user_func_array($func, $args);
            }

            return $cache[$key];
        };
    }
}
