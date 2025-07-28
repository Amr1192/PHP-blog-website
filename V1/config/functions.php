<?php

function dd($data) {
  echo "<Pre>";
  var_dump($data);
    echo "</Pre>";
    die;
}

function redirect($path = '/') {
  header("location:{$path}");
}

function view($path, $data = []) {
  extract($data);
require_once  BASE_PATH . "views/".$path.'.php';
}

function config($path, $data = []) {
  require_once  BASE_PATH . 'config/'.$path.'.php';
}

function abort() {
  $title = 'NotFound';
  http_response_code(404);
  view('main/layout');
  view('main/NotFound');
  
}

