<?php

class PostController extends Controller {

  public function index()
    {
    $this->render('main/layout');
    $db = Database::getInstance();
    $stmt = $db->query('select * from posts');
    $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
    view('posts/posts',['posts'=>$posts]);

  }
 

    public function create()
    {
        $this->render('main/layout');
        view('posts/postCreate');
    }

    public function store()
    {
        $this->render('main/layout');
        $validations = new Validations();
        $validations->postRegister($_POST);
        $errors = $validations->getErrors();
        if (empty($errors)) {
         $db = Database::getInstance();
         $query = 'insert into posts (title,body,user_id) values (:title, :body, :user_id)';
         $stmt = $db->query($query,[
        'title'=> $_POST['title'],
        'body'=> $_POST['body'],
        'user_id'=> $_POST['user_id'],
    ]);
      header('location:/posts');
      }else {
        dd($errors);
        view('main/NotFound');
    }}

    public function show($id)
    {
        $this->render('main/layout');
    }

    public function edit($id)
    {
        $this->render('main/layout');
    }

    public function update($id)
    {
          $this->render('main/layout');
    }

    public function destroy($id)
    {
        $this->render('main/layout'); 
    }
}