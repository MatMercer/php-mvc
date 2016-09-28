<?php

class Home extends Controller {
    public function index($name = 'Anonymous Kitty') {
        echo 'Welcome to home page ' . $name . '.';
    }
}