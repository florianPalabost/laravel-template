<?php

declare(strict_types=1);

use Illuminate\Support\Arr;

class MyArr extends Arr
{
    /** Getters */
    public static function getString(ArrayAccess|array $arr, string|int|null $key, string $default = ''): string
    {
        $str = parent::get($arr, $key);

        if (! is_string($str)) {
            return $default;
        }

        return $str;
    }

    public static function getInt(ArrayAccess|array $arr, string|int|null $key, int $default = 0): int
    {
        $int = parent::get($arr, $key);

        if (! is_int($int)) {
            return $default;
        }

        return $int;
    }

    public static function getFloat(ArrayAccess|array $arr, string|int|null $key, float $default = 0.0): float
    {
        $float = parent::get($arr, $key);

        if (! is_float($float)) {
            return $default;
        }

        return $float;
    }

    public static function getBool(ArrayAccess|array $arr, string|int|null $key, bool $default = false): bool
    {
        $bool = parent::get($arr, $key);

        if (! is_bool($bool)) {
            return $default;
        }

        return $bool;
    }

    public static function getArr(ArrayAccess|array $arr, string|int|null $key, array $default = []): array
    {
        $array = parent::get($arr, $key);

        if (! is_array($array)) {
            return $default;
        }

        return $array;
    }
}
