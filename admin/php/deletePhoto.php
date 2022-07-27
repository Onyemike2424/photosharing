<?php
include "../../php/connect.php";
// echo $test;

class DeletePhoto extends connection{
    function __construct(){
        $id = $_GET['id'];
        
        $query = $this->connect()->query("DELETE FROM photoshots WHERE id = '$id'");
        
        if ($query) {
            echo "<script>
                    alert('Successfully deleted')
                    window.location = '../index.php'
                </script>";
                die();
        }
    }
    
}

new DeletePhoto();

