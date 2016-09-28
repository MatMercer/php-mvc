<?php

class Calculator extends Controller {
    public function index() {
        $this->view('calculator/index', []);
    }

    public function sum($x = 2, $y = 3) {
        $this->view('calculator/sum', ['x' => $x, 'y' => $y, 'result' => $x + $y]);
    }
}