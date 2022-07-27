<?php 
include 'includ/header.php';
include 'php/connect.php';
?>


      <div class="jumbotron p-3 p-md-5 text-white rounded col-hero" style="background:linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('images/Photography-techniques.jpeg'); background-position:50% 50%;">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">Onyemike Nzelu  Photos sharing app</h1>
          <p class="lead my-3">Share your most passionate memories and event using collin's photo app.</p>
          <p class="btn btn-md btn-primary mb-0"><a href="register.php" class="text-white font-weight-bold">Get started</a></p>
        </div>
      </div>

<div class="row mb-2">
<?php
class GetImage extends connection{
 public function images()
  {
    $query = $this->connect()->query("SELECT * FROM photoshots ORDER BY id DESC");
    if($query->num_rows < 1){
      echo '

      <div class="col-12">
      <div class="card flex-md-row mb-4 box-shadow h-md-250 text-center">
        <div class="card-body d-flex flex-column align-items-start ">
          <h1><strong class="d-inline-block mb-2 text-danger text-center">NO GALLERY UPLOADED YET</strong></h1>
          <h4 class="mb-0">
            <a class=" text-center" href="register.php ">click here to get started</a>
          </h4>
      </div>
    </div>
      </div>
      ';
    }else{
      while($img = $query->fetch_assoc()){
        $userId = $img['user_id'];
        $user = $this->connect()->query("SELECT * FROM users WHERE id = '$userId'");
        $name = $user->fetch_assoc()['name'];
        


        echo '
        <div class="col-md-4">
        <div class="card flex-md-row mb-4 box-shadow h-md-250">
          <div class="card-body d-flex flex-column align-items-start">
            <strong class="d-inline-block mb-2 text-primary">'.$name.'</strong>   <small class="mb-1 text-muted">'.$img['created_at'].'</small>
            <h3 class="mb-0">
              <a class="text-dark" href="#">'.$img['title'].'</a>
            </h3>
            <span class="text-muted"> __'.$img['category'].'</span>
            <img class="card-img-right   w-100" src="photo-uploads/'.$img['photo'].'" alt="Card image cap">
           
          </div>
          
        </div>
      </div>
        ';
      }
    }
  }
}

$images = new GetImage();
$images->images();

?>


<?php include 'includ/footer.php' ?>