<?php

class Home extends Controller {
    public function index($name = 'Anonymous Kitty') {
        $user = $this->model('User');
        $user->name = ucfirst($name);
        $this->view('home/index', ['name' => $user->name]);
    }
}