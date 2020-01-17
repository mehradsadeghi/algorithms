<?php

namespace Src\Sort;

class MergeSort {

    /**
     * Sorts array of un-sorted items in ascending order
     * Based on merge sort algorithm
     *
     * @param array $items
     * @return array
     */
    public function sort(array $items): array {

        $count = count($items);

        if($count <= 1) {
            return $items;
        }

        $middle = $count / 2;

        $leftSide = array_slice($items, 0, $middle);
        $rightSide = array_slice($items, $middle);

        $leftSide = $this->sort($leftSide);
        $rightSide = $this->sort($rightSide);

        $items = $this->merge($leftSide, $rightSide);

        return $items;
    }

    /**
     * Sort and merge two arrays
     *
     * @param array $leftSide
     * @param array $rightSide
     * @return array
     */
    private function merge(array $leftSide, array $rightSide): array {

        $output = [];

        while(count($leftSide) > 0 and count($rightSide) > 0) {

            if($leftSide[0] > $rightSide[0]) {
                $output[] = $rightSide[0];
                $rightSide = array_slice($rightSide, 1);
            } else {
                $output[] = $leftSide[0];
                $leftSide = array_slice($leftSide, 1);
            }
        }

        if(count($leftSide) > 0) {
            $output = array_merge($output, $leftSide);
        }

        if(count($rightSide) > 0) {
            $output = array_merge($output, $rightSide);
        }

        return $output;
    }
}