<?php

class UserController extends Controller  {

  public function index() {
    $auth = new AuthController('Not Found');
    $auth->Authenticate();
    $this->render('main/layout');
    $db = Database::getInstance();
    $stmt = $db->query('select * from users');
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    view('users/users',['users'=>$users]);

  }
  public function home() {
    $this->render('main/layout');
  }

 public function show()
    {
      $id = $_GET['id'];

        $this->render('main/layout');
        $db = Database::getInstance();
         $stmt = $db->query('select * from users where id = :id',['id'=>$id]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        view('users/user',['user'=>$user]);
    }

  public function update()  {
    $this->render('main/layout');
    echo 'we will update soon!';


  }
  public function destroy()  {
    $id = $_GET['id'];
    $this->render('main/layout');
            $db = Database::getInstance();
    $stmt = $db->query('delete from users where id = :id',['id'=>$id]);
        header('location:/users');

  }
}