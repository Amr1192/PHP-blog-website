<?php

class Validations {

    protected $errors = [];

    public function registerValidate($request) {

        $username = trim($request['username'] ?? '');
        $email = trim($request['email'] ?? '');
        $password = $request['password'] ?? '';
        $confirm_password = $request['confirm_password'] ?? '';

        if (strlen($username) < 1) {
            $this->errors['username'] = 'username is required';
        } elseif (strlen($username) < 3) {
            $this->errors['username'] = 'username must be more than 2 characters';
        }

        if (strlen($email) < 1) {
            $this->errors['email'] = 'Your email is required';
        }

        if (strlen($password) < 8) {
            $this->errors['password'] = 'Your password must be at least 8 characters';
        }

        if ($password !== $confirm_password) {
            $this->errors['confirm_password'] = 'Your password doesn\'t match';
        }

    }


    public function postRegister($request) {
      $title = trim($request['title'] ?? '');
        $body = trim($request['body'] ?? '');
        $user_id = trim($request['user_id'] ?? '');

                if (strlen($title) < 1) {
            $this->errors['title'] = 'Title is required';
        }
        if (strlen($body) < 3) {
            $this->errors['body'] = 'Your body must be at least 3 characters';
        }
        if (strlen($user_id) < 1) {
            $this->errors['user_id'] = 'userid is required';
        }
    }

    public function loginValidate($request) {
              $email = trim($request['email'] ?? '');
              $password = trim($request['password'] ?? '');
              if (strlen($email) <1 || strlen($password) <1) {
              if (strlen($email) < 1) {
                $this->errors['email'] = 'Your email is required';
              }
              if (strlen($password) < 1) {
                $this->errors['password'] = 'Your password is required';
              }
              }
              else {
              $db = Database::getInstance();
               $query = 'select * from users where email = :email';
              $stmt = $db->query($query, [
                'email' =>$request['email']
              ]);
              $user = $stmt->fetch();
              $_SESSION['id']= $user['id'];
              if(!$user) {
              $this->errors['email'] = 'The email or password is invalid';
              $this->errors['password'] = 'The email or password is invalid';
              }
              elseif ($request['password'] !=$user['password']) {
                $errors['password'] = 'Incorrect password.';
                $this->errors['password'] = 'The email or password is invalid';

            }
            }
    }

    public function getErrors() {
        return $this->errors;
    }
}
