<?php
class ControllerHelper {
    public static function randomRow($min, $max, $quantity) {
        $numbers = range($min, $max);
        shuffle($numbers);       
        return array_slice($numbers, 0, $quantity);
    }
}
