<?php include 'include/header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-12 p-3 bg-dark rounded">
            <h3 class="text-light"><span><img src="../assets/img/avatar.png" style="width:50px; border-radius:50px; height:50px; border:2px solid gray" alt=""></span> Welcome <?php echo $_SESSION['firstname'] ?> <span> </span></h3>
        </div>

        <!-- <div class="col-md-12 mt-5 text-center">
        <a href="" class="btn btn-primary btn-lg text-center">Add Photo</a>      
        <a href="" class="btn btn-outline-danger btn-lg text-center">View Photo</a>      
        </div> -->

        <div class="col-md-12 mt-5">
            <h4 class="text-muted">Add Photo</h4>
            <hr>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h4>Add new photo</h4>
                        </div>
                        <div class="card-body">
                            <div class="form">
                                <form action="php/upload.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="title" name="title" placeholder="Caption">
                                    </div>
                                    <div class="form-group">
                                        <!-- <label for="image">Image</label> -->
                                        <select name="category" id="" class="form-control">
                                        <option value="">choose Category</option>
                                        <option>Traveling</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input accept="image/*" type='file' id="imgInp" name="photo">
                                    </div>
                                    
                                    <div class="form-group">
                                    <span>Publish </span><input type="radio" name="status" value="1"> &nbsp;  &nbsp;  &nbsp; 
                                    <span>Private </span><input type="radio" name="status" value="0">
                                    </div>

                                    <div class="form-group">
                                        <img id="blah" src="#" alt="your image" class="w-50" />
                                    </div>
                                    <button type="submit" class="btn btn-primary" name="upload">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
    imgInp.onchange = evt => {
  const [file] = imgInp.files
  if (file) {
    blah.src = URL.createObjectURL(file)
  }
}
</script>
<?php include 'include/footer.php'; ?>