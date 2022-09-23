<?php

namespace App\Services;

class BubbleSort implements BubbleSortInterface
{

    public function sort(array $elements): array
    {
        $size = count($elements);
        do {
            $swapped = false;
            for ($i = 0; $i < $size - 1; $i++) {
                if ($elements[$i] > $elements[$i + 1]) {
                    $temp = $elements[$i];
                    $elements[$i] = $elements[$i + 1];
                    $elements[$i + 1] = $temp;
                    $swapped = true;
                }
            }
            $size--;
        } while ($swapped);
        return $elements;
    }
}
