<?php

class Home extends Controller {
    public function index($name = 'Anonymous Kitty') {
        $user = $this->model('User');
        $user->name = $name;
        echo 'Welcome to home page ' . $user->name . '.';
    }
}