<?php
session_start();
if(isset($_SESSION['id'])){
  header('Location: ../dashboard.php');
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

  <title>Signin</title>

  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="signin.css" rel="stylesheet">
</head>

<body>
  <div class="row mt-5">
    <div class="col-sm-4"></div>
    <div class="col-sm-4 mt-5 sign-in">