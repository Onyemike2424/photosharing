<?php
session_start();

if (!isset($_SESSION["id"])) {
    header('Location: login.php');
    die();
}

if(isset($_SESSION['role']) && $_SESSION['role'] == 'admin'){
  header('Location: admin');
  die();
}elseif(isset($_SESSION['role']) && $_SESSION['role'] == 'user'){
    header('Location: photographers');
    die();
}else{
    header('Location: login.php');
    die();
}