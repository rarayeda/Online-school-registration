 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <style type="text/css">
     img{
      filter: brightness(25%);
      position: relative;
      } 
  </style>

</head>
<body>
   <div class="carousel-item active">
                <img class="img-fluid w-100 overflow-hidden"
                    src="../assets/img/index3.jpeg"
                    class="w-100" alt="...">
   <div class="login-box"> 
  <form action="proses.php" method="POST">
    <h1 class="text-center text-white">LOGIN</h1>
    <div class="user-box">
      <input required="" name="username" type="text">
      <label>Username</label>
    </div>
    <div class="user-box">
      <input required="" name="password" type="password">
      <label>Password</label>
    </div><center>
    <input type="submit" name="login">
       <span></span>
    </center>
  </form>
</div>
</div>
</body>
</html>