<?php

class Home extends Controller {
    public function index($params) {
        if(isset($params[0])) {
            $name = $params[0];
        }
        else {
            $name = 'Anonymous Kitty';
        }
        echo 'Welcome to home page ' . $name . '.';
    }
}