<?php

$uri = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];
$title = match($uri) {
  '/' =>'home',
  '/users' =>'users',
  '/user' =>'user',
  '/posts' =>'posts',
  '/post' =>'post',
  '/user/update' =>'user update',
  '/post/update' =>'post update',
  '/user/delete' =>'user delete',
  '/post/delete' =>'post delete',
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
$router->get("/user" , ['UserController','show']);
$router->get("/user/update" , ['UserController','update']);
$router->post("/user/delete" , ['UserController','destroy']);
//posts routes
$router->get('/posts' , ['PostController','index']);
$router->get('/posts/create' , ['PostController','create']);
$router->post('/posts/create' , ['PostController','store']);
$router->get("/post" , ['PostController','show']);
$router->get("/post/update" , ['PostController','update']);
$router->post("/post/update" , ['PostController','updated']);
$router->post("/post/delete" , ['PostController','destroy']);


//Auth routes
$router->get('/register' , ['AuthController','register']);
$router->get('/login' , ['AuthController','login']);
$router->get('/unauthorized' , ['AuthController','Authorization']);

$router->post('/register' , ['AuthController','registered']);
$router->post('/login' , ['AuthController','loggedin']);
$router->post('/logout' , ['AuthController','logout']);

$router->resolve($uri,$method);


