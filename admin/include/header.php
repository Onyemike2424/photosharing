<?php session_start(); 

if(!isset($_SESSION['id'])){
  header('Location: ../php/checkRole.php');
}


if(isset($_SESSION['role']) && $_SESSION['role'] != 'admin'){
  header('Location: ../php/checkRole.php');
  die();
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Photo sharing</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="blog.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
          </div>
          <div class="col-4 text-center">
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            
            <?php
                if(isset($_SESSION['id'])){
                ?>
                <a class="btn btn-sm btn-outline-secondary mr-2" href="../index.php">Home</a>
                <a class="btn btn-sm btn-outline-secondary mr-2" href="index.php">Dashboard</a>
                <a class="btn btn-sm btn-outline-secondary mr-2" href="add-photos.php">Add Photo</a>
                <a class="btn btn-sm btn-danger" href="../logout.php">Signout</a>
                <?php
                }else{
            ?>
            <a class="btn btn-sm btn-outline-secondary ml-2" href="index.php">Home</a>
            <a class="btn btn-sm btn-primary ml-2" href="register.php">Sign up</a>
            <a class="btn btn-sm btn-success ml-2" href="login.php">Sign in</a>
            <?php } ?>
        </div>
        </div>
      </header>

