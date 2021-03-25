<?php

/**
 * SOLID Principles Applied
 * 
 * Single Responsibility - The class does only one thing. It implements methods that operate lists.
 * Open/closed - The class is open for extension and closed for modification. 
 * Liskov Substitution - It's clearly a class that operates lists
 * Interface Segregation - It does not depend on methods or interfaces
 * Dependency Inversion - It does not depend on low-level modules, even when they exist.
 */

class ListOperator {
    public function inputStringOnIndexesOfAList($string, &$array, $arrayOfIndexes = []) {
        $arrNew = array_intersect($array, $arrayOfIndexes);
        
        foreach($arrNew as $key => $value) {
            $array[$key] = $string;
        }
    }
    
    public function printList($array) {
        foreach($array as $value) {
            echo $value . '<br>';
        }
    }
}
?>