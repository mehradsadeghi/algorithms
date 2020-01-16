<?php

namespace Src\Sort;

class BubbleSort {

    public const ASC = 1;
    public const DESC = 2;

    public function sort(array $items, $type) {

        if($type !== self::ASC and $type !== self::DESC) {
            throw new \InvalidArgumentException('The type value is invalid.');
        }

        if($type === self::ASC) {
            return $this->sortAsc($items);
        } else {
            return $this->sortDesc($items);
        }
    }

    private function sortAsc(array $items) {

        $count = count($items);
        $temp = 0;

        for($i = 0; $i < $count; $i++) {

            for($j = 0; $j < $count - $i - 1; $j++) {

                if($items[$j] > $items[$j + 1]) {
                    $temp = $items[$j];
                    $items[$j] = $items[$j + 1];
                    $items[$j + 1] = $temp;
                }
            }
        }

        return $items;
    }

    private function sortDesc(array $items) {

        $count = count($items);
        $temp = 0;

        for($i = 0; $i < $count; $i++) {

            for($j = 0; $j < $count - $i - 1; $j++) {

                if($items[$j] < $items[$j + 1]) {
                    $temp = $items[$j];
                    $items[$j] = $items[$j + 1];
                    $items[$j + 1] = $temp;
                }
            }
        }

        return $items;
    }
}