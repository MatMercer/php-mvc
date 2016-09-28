<?php

class Calculator extends Controller {
    public function index() {
        echo 'Hey! This is a calculator! It still only sum 2 numbers... Yet you need to use the URL to pass the parameters. ';
        echo 'Example: URL/calculator/sum/3/5';
    }

    public function sum($x = 2, $y = 3) {
        echo $x . ' + ' . $y . ' = ' . ($x + $y);
    }
}