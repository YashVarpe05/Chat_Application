<?php
session_start();
include_once "config.php";
// echo "successfully";
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if (!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {

    //check  user email is valid or not
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $sql = mysqli_query($conn, "SELECT email FROM user WHERE email ='{$email}' ");
        if (mysqli_num_rows($sql) > 0) {
            echo "$email - this email is already exist!";
        } else {
            if (isset($_FILES['image'])) { //if file upload
                $img_name = $_FILES['image']['name']; //getting user uploaded img name
                // $img_type = $_FILES['image']['type']; //getting user uploaded img type
                $tmp_name = $_FILES['image']['tmp_name']; //getting temporary image name is used to save /move file in our folder

                $img_explode = explode('.', $img_name);
                $img_ext = end($img_explode);

                $extensions = ['png', 'jpeg', 'jpg'];
                if (in_array($img_ext, $extensions) === true) {
                    $time = time();
                    $new_img_name = $time . $img_name;
                    if (move_uploaded_file($tmp_name, "images/" . $new_img_name)) {
                        $status = 'Active now';
                        $random_id = rand(time(), 1000000);

                        $sql2 = mysqli_query($conn, "INSERT INTO user (unique_id,fname,lname,email,password,img,status)
                        VALUES({$random_id},'{$fname}','{$lname}','{$email}','{$password}','{$new_img_name}','{$status}')");
                        if ($sql2) {
                            $sql3 = mysqli_query($conn, "SELECT * FROM user WHERE email ='{$email}'");
                            if (mysqli_num_rows($sql3) > 0) {
                                $row = mysqli_fetch_assoc($sql3);
                                $_SESSION['unique_id'] = $row['unique_id'];
                                echo "success";
                            }
                        } else {
                            echo "Something went wrong!";
                        }
                    }
                } else {
                    echo "Please select an image file - jpeg,jpg,png";
                }
            } else {
                echo "Please select an image file!";
            }
        }
    } else {
        echo "$email - this is not a valid email!";
    }
} else {
    echo 'All input field are required';
}
