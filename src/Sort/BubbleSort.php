<?php

namespace Src\Sort;

class BubbleSort {

    /**
     * Sorts array of un-sorted items in ascending order
     * Based on bubble sort algorithm
     *
     * @param array $items
     * @return array
     */
    public function sort(array $items): array {

        $count = count($items);

        if($count <= 1) {
            return $items;
        }

        $temp = 0;

        for ($i = 0; $i < $count; $i++) {

            $flag = false;

            for ($j = 0; $j < $count - $i - 1; $j++) {

                if($items[$j] > $items[$j + 1]) {
                    $temp = $items[$j];
                    $items[$j] = $items[$j + 1];
                    $items[$j + 1] = $temp;
                    $flag = true;
                }
            }

            if($flag === false) {
                break;
            }
        }

        return $items;
    }
}