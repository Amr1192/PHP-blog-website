<?php

class AuthController extends Controller {

  public function register()
    {
        $this->render('main/layout');
        view('registeration/register');
    }

    public function login()
    {
          $this->render('main/layout');
        view('registeration/login');
    }

    public function registered() {
          $this->render('main/layout');
          $validations = new Validations();
         $validations->registerValidate($_POST);
        $_SESSION['errors'] = $validations->getErrors();
        $_SESSION['old'] = $_POST;
        if (empty( $_SESSION['errors'])) {
         $db = Database::getInstance();
         $query = 'insert into users (username,email,password) values (:username, :email, :password)';
        $users = $db->query($query,[
        'username'=> $_POST['username'],
        'email'=> $_POST['email'],
        'password'=> $_POST['password'],
    ]);
      $_SESSION['user'] = $_SESSION['old']['username'];
      unset($_SESSION['old']);
      header('location:/users');
      }else {
        header('location:/register');
      }
    }

    public function loggedin()
    {   
        $this->render('main/layout');
          $validations = new Validations();
          $validations->loginValidate($_POST);
           $_SESSION['errors'] = $validations->getErrors();
           $_SESSION['old'] = $_POST;

        if(empty($_SESSION['errors'])) {

        $_SESSION['email'] = $_SESSION['old']['email'];
      unset($_SESSION['old']);
      header('location:/users');
      }
      else {
        header('location:/login');
      }
    }
    
    public function logout() {

      unset($_SESSION['user']);
      unset($_SESSION['email']);
      unset($_SESSION['id']);
      header('location:/');
      
    }

  
}