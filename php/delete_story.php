<?php
include 'connect.php';

echo$id = $_GET['picture_id'];
$query = $dircon->prepare("DELETE FROM pictures WHERE id = ?");
$query->bind_param('s', $id);
$query->execute();

echo "<script>
        alert('Failed to uploaded')
        window.location = '../index.php'
    </script>";
die();
