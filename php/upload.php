<?php
include 'connect.php';
session_start();
if (isset($_POST["upload"])) {
    if (isset($_FILES["photo"])) {
        $title = __("title");
        $story = __("story");
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
                $nwn = uniqid("", true) . $rn . "." . $lowimgext;
                move_uploaded_file($tmp_name, "../img/story/" . $nwn);
                $insert = "INSERT INTO pictures(user_id, name, title, story, created_at)
                VALUES ('$uid', '$nwn', '$title', '$story', '$ereg')";
                $insertit = mysqli_query($dircon, $insert);
                if ($insertit) {
                    echo "<script>
                            alert('Successfully uploaded')
                            window.location = '../dashboard.php'
                        </script>";
                    
                } else {
                    echo "<script>
                            alert('Failed to uploaded')
                            window.location = '../dashboard.php'
                        </script>";
                }
            } else {
                echo "<script>
                            alert('There was an error uploading this file')
                            window.location = '../dashboard.php'
                    </script>"; 
            }
        } else {
            echo "<script>
                            alert('Wrong picture format. Please try again')
                            window.location = '../dashboard.php'
                        </script>";
            
        }
    }
} else {
}
?>

