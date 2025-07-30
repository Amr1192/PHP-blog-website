<?php

class Controller {

      protected $title;

    public function __construct($title = '') {
        $this->title = $title;
    }

    public function render($view) {
    $title = $this->title;
     view($view,['title' => $title]);
}

public function home() {
    view('main/layout',['title'=>$this->title]);
     view('main/home');
}
}