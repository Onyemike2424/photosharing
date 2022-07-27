<?php include 'include/header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-12 p-3 bg-dark rounded">
            <h3 class="text-light"><span><img src="../assets/img/avatar.png" style="width:50px; border-radius:50px; height:50px; border:2px solid gray" alt=""></span> Welcome <?php echo $_SESSION['firstname'] ?> <span> </span></h3>
        </div>

        <div class="col-md-12 mt-5 text-center">
        <a href="add-photos.php" class="btn btn-primary btn-lg text-center">Add Photo</a>      
        <a href="all-photos.php" class="btn btn-outline-danger btn-lg text-center">View Photo</a>      
        </div>

        <div class="col-md-12 mt-5 text-center">
            <h4 class="text-muted">Recent photos</h4>
           <hr>
           <div class="row">

    <?php

include 'php/recentPhoto.php';


// var_dump($data);
//     foreach ($photos as $photo) {
//         # code...

//         // die

//         echo $photo['id']. '<br>';
//     }


    ?>


            <!-- Photos will be here -->
           </div>

        </div>

    </div>
</div>

<?php include 'include/footer.php'; ?>
