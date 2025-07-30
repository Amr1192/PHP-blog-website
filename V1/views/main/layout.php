<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$title?></title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
</head>
<body>
  <style>
  body {
    width: 100%;
  }
  
  .nav-link {
    position: relative;
    transition: color 0.3s;
  }

  .nav-link::after {
    content: '';
    position: absolute;
    width: 0;
    height: 2px;
    left: 0;
    bottom: 0;
    background-color: #0d6efd;
    transition: width 0.3s;
  }

  .nav-link:hover::after {
    width: 100%;
  }


 
</style>

<ul class="nav justify-content-end bg-light px-3 py-2 shadow-sm">
  <li class="nav-item">
    <a class="nav-link active" href="/">Home</a>
  </li>
  <li class="nav-item">
    <?= isset($_SESSION['user']) || isset($_SESSION['email']) ? '<a class="nav-link" href="/users">Users</a>' : '' ?>
  </li>
  <li class="nav-item">
    <?= isset($_SESSION['user']) || isset($_SESSION['email']) ? '<a class="nav-link" href="/posts">Posts</a>' : '' ?>
  </li>
  <li class="nav-item">
    <?= isset($_SESSION['user']) || isset($_SESSION['email']) ? '<a class="nav-link" href="/posts/create">create post</a>' : '' ?>
  </li>
  <li class="nav-item">
    <?= isset($_SESSION['user']) || isset($_SESSION['email']) ? 
        "<form method='POST' action='/logout'>
           <button type='submit' class='nav-link'>Logout</button>
         </form>" 
        : '<a class="nav-link" href="/login">Login</a>' ?>
  </li>
</ul> 
</body>
</html>

