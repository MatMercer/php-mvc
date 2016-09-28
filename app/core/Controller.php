<?php

class Controller {
    public function model($model) {
        // Import the model
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }
}