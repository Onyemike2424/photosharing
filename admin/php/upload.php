<?php
include '../../php/connect.php';
// echo $test;



session_start();
// echo $_SESSION['id'];
// die();
// if (isset($_POST["upload"]))
class Upload extends connection {
    
    public function up(){
        if (isset($_FILES["photo"])) {
            $title = $this->__pData__("title");
            $category = $this->__pData__("category");
            $status = $this->__pData__("status");
            $uid = $_SESSION['id'];
    
            $pxname = $_FILES['photo']['name'];
            $tmp_name = $_FILES['photo']['tmp_name'];
            $size = $_FILES['photo']['size'];
            $type = $_FILES['photo']['type'];
            $error = $_FILES['photo']['error'];
    
            $ereg = date("l-d-m-y h:m:s:a");
            $rn = rand(0000000, 9999999);
            $image_accept = array('jpg', 'png', 'jpeg');
            $imgext = explode('.', $pxname);
            $lowimgext = strtolower(end($imgext));
    
            if (in_array($lowimgext, $image_accept)) {
                if ($error === 0) {
                    $nwn = uniqid($pxname . "-", true) . $rn . "." . $lowimgext;
                    move_uploaded_file($tmp_name, "../../photo-uploads/" . $nwn);
    
    
                    // $insert = "INSERT INTO photoshots(user_id, photo, title, category, stat, created_at)
                    //                             VALUES ('1', 'nwn', 'title', 'category', 'status' 'ereg')";
                    // $insertit = $this->connect()->query($insert);




                    $insert =  $this->connect()->prepare("INSERT INTO photoshots (user_id, photo, title, category, stat, created_at) 
                    VALUES(?,?,?,?,?,?)");
		            $insert->bind_param("ssssss", $uid, $nwn, $title, $category, $status, $ereg);
		
                    // $insertit = mysqli_query($dircon, $$insert);
    
                    
                    if ($insert->execute()) {
                        echo "<script>
                                alert('Successfully uploaded')
                                window.location = '../add-photos.php'
                            </script>";
                            die();
                    } else {
                        echo "<script>
                                alert('Failed to uploaded ". ")
                                window.location = '../add-photos.php'
                            
                            </script>";
                            die();
                    }
                } else {
                    echo "<script>
                                alert('There was an error uploading this file')
                                window.location = '../add-photos.php'
                        </script>"; 
                        die();
                }
            } else {
                echo "<script>
                                alert('Wrong picture format. Please try again')
                                window.location = '../add-photos.php'
                            </script>";
                            die();
                
            }
        }
    }
} 

$new = new Upload;
$new->up();