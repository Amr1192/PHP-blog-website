<?php

class UserController extends Controller  {
    
  public function index() {
    $this->render('main/layout');
    $db = Database::getInstance();
    $stmt = $db->query('select * from users');
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    view('users/users',['users'=>$users]);

  }
  public function home() {
    $this->render('main/layout');
  }

  public function show()  {
    $this->render('main/layout');
  }

  public function update()  {
    $this->render('main/layout');
  }
}