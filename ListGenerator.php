<?php

/**
 * SOLID Principles Applied
 * 
 * Single Responsibility - The class does only one thing. It generates lists.
 * Open/closed - The class is open for extension and closed for modification. 
 * Liskov Substitution - It's clearly a class that generates lists
 * Interface Segregation - It does not depend on methods or interfaces
 * Dependency Inversion - It does not depend on low-level modules, even when they exist.
 */

class ListGenerator {

    public function generateOneToHundredList() {
        $array = [];
        foreach (range(1, 100) as $number) {
            array_push($array, $number);
        }

        return $array;
    }

    public function generateListMultiplesOfThree() {
        $array = [];
        foreach (range(1, 100) as $number) {
            array_push($array, $number * 3);
        }

        return $array;
    }

    public function generateListMultiplesOfFive() {
        $array = [];
        foreach (range(1, 100) as $number) {
            array_push($array, $number * 5);
        }

        return $array;
    }

    public function generateListMultiplesOfThreeAndFive() {
        $array = [];
        foreach (range(1, 100) as $number) {
            if ($number % 3 == 0 && $number % 5 == 0) {
                array_push($array, $number);
            }
        }

        return $array;
    }
}
?>