<?php

class PostController extends Controller {

  public function index()
    {
         $auth = new AuthController('Not Found');
    $auth->Authenticate();
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
           $_SESSION['errors'] = $validations->getErrors();
           $_SESSION['old'] = $_POST;
        if (empty($_SESSION['errors'])) {
         $db = Database::getInstance();
         $query = 'insert into posts (title,body,user_id) values (:title, :body, :user_id)';
         $stmt = $db->query($query,[
        'title'=> $_POST['title'],
        'body'=> $_POST['body'],
        'user_id'=> $_POST['user_id'],
    ]);
      header('location:/posts');
      }else {
       header('location:/posts/create');
    }}

    public function show()
    {
      $id = $_GET['id'];

        $this->render('main/layout');
        $db = Database::getInstance();
         $stmt = $db->query('select * from posts where id = :id',['id'=>$id]);
        $post = $stmt->fetch(PDO::FETCH_ASSOC);
        view('posts/post',['post'=>$post]);
    }


    public function update()
    {
        $id = $_GET['id'];
          $this->render('main/layout');
          view('posts/postUpdate');
    }
    public function updated()
    {
        $id = $_GET['id'];
        $title  = $_POST['title'];
        $body  = $_POST['body'];
          $this->render('main/layout');
          view('posts/postUpdate');
           $db = Database::getInstance();
    $stmt = $db->query('update posts set title = :title , body = :body where id = :id',[
      'id'=>$id,
      'title'=>$title,
      'body'=>$body,
    ]);
        header('location:/posts');
    }

  public function destroy()  {
    $id = $_GET['id'];
    $this->render('main/layout');
            $db = Database::getInstance();
    $stmt = $db->query('delete from posts where id = :id',['id'=>$id]);
        header('location:/posts');

  }
}