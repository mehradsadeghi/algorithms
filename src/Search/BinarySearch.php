<?php

namespace Src\Search;

class BinarySearch {

    public function search(array $haystack, int $target) {

        $minIndex = 0;
        $maxIndex = count($haystack) - 1;

        $steps = 0;

        while($maxIndex >= $minIndex) {

            $steps++;

            $guessIndex = floor(($minIndex + $maxIndex) / 2);
            $guess = $haystack[$guessIndex];

            if($guess === $target) {
                echo "The target has been found in $steps step(s) \n";
                return $guessIndex;
            } else if($guess > $target) {
                $maxIndex = $guessIndex - 1;
            } else {
                $minIndex = $guessIndex + 1;
            }
        }

        return -1;
    }
}