<?php

class App {
    // default controller and methods
    protected $controller = 'home';
    protected $method = 'index';

    // parameters passed in the url
    protected $params = [];

    public function __construct() {
        // echo 'App instantiated';
        $this->parseUrl();
    }

    /*
     * it parses the url based in the
     * url parameter, an example of url is
     * http://localhost/public/?url=something
     */
    public function parseUrl() {
        if(isset($_GET['url'])) {
            echo $_GET['url'];
        }
    }
}