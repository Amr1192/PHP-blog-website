<?php

class Router {
 
  protected $routes = [];
  protected $title;

    public function __construct($title) {
        $this->title = $title;
    }


  public function get($uri,$action) {
      $this->routes['GET'][$uri] = $action;
  }


  public function post($uri,$action) {
      $this->routes['POST'][$uri] = $action;
  }


  public function resolve($uri,$method) {
    $action = $this->routes[$method][$uri]?? null;
  
    if (!$action) {
      abort();
    }
            if (is_array($action)) {
            [$class, $method] = $action;

            $controller = new $class($this->title);

            if (!method_exists($controller, $method)) {
                echo "Method $method not found in controller $class";
                return;
            }

            $controller->$method();
          }
    elseif (is_callable($action)) {
       call_user_func($action);
    } elseif (is_string($action)) {
       require_once $action;
        }
 
}
}

