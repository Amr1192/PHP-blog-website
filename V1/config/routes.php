<?php

$uri = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];
$title = match($uri) {
  '/' =>'home',
  '/users' =>'users',
  '/posts' =>'posts',
  '/register' =>'register',
  '/login' =>'login',
  '/posts/create' =>'post create',
  default => 'default'
};    

$router = new Router($title);
//users routes
$router->get('/' , ['Controller','home'] );
$router->get('/users' , ['UserController','index']);
$router->get('/users/create' , ['UserController','create']);
$router->post('/users/user' , ['UserController','show']);
$router->post('/users/user' , ['UserController','update']);
//posts routes
$router->get('/posts' , ['PostController','index']);
$router->get('/posts/create' , ['PostController','create']);
$router->post('/posts/create' , ['PostController','store']);
//Auth routes
$router->get('/register' , ['AuthController','register']);
$router->get('/login' , ['AuthController','login']);

$router->post('/register' , ['AuthController','registered']);
$router->post('/login' , ['AuthController','loggedin']);
$router->post('/logout' , ['AuthController','logout']);

$router->resolve($uri,$method);


