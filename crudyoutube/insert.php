<?php
include "conn.php";
if(isset($_POST['done'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $q = "INSERT INTO crudtable ('username', 'password') VALUES ('{$username}','{$password}');";
    $query = mysqli_query($conn, $q);
}
?>
<!DOCTYPE HTML>
    <html>
        <head>
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        </head>
        <body>
          <div class="col-lg-6 m-auto">
              <form method="post" action="conn.php">
                  <br><br><div class="card">
                      <div class="crud-header bg-dark">
                          <h1 class="text-white text-center">INSERT OPERATION</h1>
                      </div>
                     <br> <label>UESRNAME</label>
                      <input type="text" name="username" class="form-control"><br>
                      <label>PASSWORD</label>
                      <input type="password" name="password" class="form-control"><br>
                      <button class="btn btn-success" type="submit" name="done">SUBMIT</button>
                  </div>

              </form>
        </body>
    </html>