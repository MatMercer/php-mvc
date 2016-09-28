<?php

class App {
    // default controller and methods
    protected $controller = 'home';
    protected $method = 'index';

    // parameters passed in the url
    protected $params = [];

    public function __construct() {
        // echo 'App instantiated';
        $url = $this->parseUrl();
 
        // checks if the controller called exists
        if(file_exists('../app/controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            // removes the param from the 'stack'
            unset($url[0]);
        }

        // call the controller, home controller if above won't exists
        require_once('../app/controllers/' . $this->controller . '.php');

        // instantiates the controller (which can be called from a string, weird)
        $this->controller = new $this->controller;

        // checks if another parameter was passed to the controller
        if(isset($url[1])) {
            // checks if the method called from the controller exists
            if(method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }
        // sets the parameters based in what was left
        // if there is nor $url, so on no parameters
        $this->params = $url ? array_values($url) : [];
        // print_r($this->params);

        // finally call everything with the parameters
        call_user_func_array([$this->controller, $this->method], $this->params);

        // var_dump($this->controller);
    }

    /*
     * it parses the url based in the
     * url called with the .htaccess
     * the returned array is used to call
     * a desired controller with the desired method
     * with any parameters, like
     * /stdio/printf/test will call the printf
     * method from the stdio controller with test as a
     * parameter
     */
    public function parseUrl() {
        // checks if the client passed the url parameter, the .htaccess file passes it when needed
        if(isset($_GET['url'])) {
            /* first it removes whitespaces from the parameter
             * after that it filters with the sanitize url to remove invalid url characters
             * then it transforms everything into an array based in the '/'
             */
            
            return $url = explode('/', filter_var(trim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }
}