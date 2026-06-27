<?php

namespace App\Services;

class VariationService
{
    public static function cartesianProduct(array $arrays): array
    {
        $result = [[]];

        foreach ($arrays as $values) {
            $tmp = [];

            foreach ($result as $item) {
                foreach ($values as $value) {
                    $tmp[] = array_merge($item, [$value]);
                }
            }

            $result = $tmp;
        }

        return $result;
    }
}