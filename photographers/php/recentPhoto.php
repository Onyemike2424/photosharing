<?php
include "../php/connect.php";
// echo $test;

class AllPhotos extends connection{
    function __construct(){
        $data = [];
        $query = $this->connect()->query("SELECT * FROM photoshots ORDER BY id DESC LIMIT 8");
        while($row = $query->fetch_assoc()){
           echo '

           <div class="col-md-3 m-3 shadow shadow-sm border p-2" >
                <img class="w-100" src="../photo-uploads/'.$row['photo'].'" alt="">
               <div class="mt-3">
                <small>'.$row['title'].'</small>
               </div>
            </div>

            ';
        }

    //    echo $data = json_encode($photos);
    return $data;

    }
    
}

new AllPhotos();

