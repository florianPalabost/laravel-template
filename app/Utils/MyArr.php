<?php

declare(strict_types=1);

namespace App\Utils;

use ArrayAccess;
use Illuminate\Support\Arr;

class MyArr extends Arr
{
    /** Getters */

    /**
     * @param ArrayAccess<string, mixed>|array $arr
     * @param string|int|null $key
     * @param string $default
     * @return string
     */
    public static function getString(ArrayAccess|array $arr, string|int|null $key, string $default = ''): string
    {
        $str = parent::get($arr, $key);

        if (is_string($str) === false) {
            return $default;
        }

        return $str;
    }

    /**
     * @param ArrayAccess<string, mixed>|array $arr
     * @param string|int|null $key
     * @param int $default
     * @return int
     */
    public static function getInt(ArrayAccess|array $arr, string|int|null $key, int $default = 0): int
    {
        $int = parent::get($arr, $key);

        if (is_int($int) === false) {
            return $default;
        }

        return $int;
    }

    /**
     * @param ArrayAccess<string, mixed>|array $arr
     * @param string|int|null $key
     * @param float $default
     * @return float
     */
    public static function getFloat(ArrayAccess|array $arr, string|int|null $key, float $default = 0.0): float
    {
        $float = parent::get($arr, $key);

        if (is_float($float) === false) {
            return $default;
        }

        return $float;
    }

    /**
     * @param ArrayAccess|array $arr
     * @param string|int|null $key
     * @param bool $default
     * @return bool
     */
    public static function getBool(ArrayAccess|array $arr, string|int|null $key, bool $default = false): bool
    {
        $bool = parent::get($arr, $key);

        if (is_bool($bool) === false) {
            return $default;
        }

        return $bool;
    }

    /**
     * @param ArrayAccess<string, mixed>|array $arr
     * @param string|int|null $key
     * @param array $default
     * @return array
     */
    public static function getArr(ArrayAccess|array $arr, string|int|null $key, array $default = []): array
    {
        $array = parent::get($arr, $key);

        if (is_array($array) === false) {
            return $default;
        }

        return $array;
    }
}
