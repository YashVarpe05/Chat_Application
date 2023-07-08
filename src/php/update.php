<?php
session_start();
include "config.php";

// Check if the user ID is provided in the URL
if (!isset($_GET['user_id'])) {
    // Redirect to the page where the user list is displayed
    header("Location: fetch.php");
    exit();
}

// Get the user ID from the URL
$user_id = $_GET['user_id'];

// Fetch the user data from the database
$query = "SELECT * FROM user WHERE user_id = '$user_id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

// Check if the user exists
if (!$row) {
    // Redirect to the page where the user list is displayed
    header("Location: fetch.php");
    exit();
}

// Handle the form submission
if (isset($_POST['btn_update'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Update the user data in the database
    $updateQuery = "UPDATE user SET fname = '$fname', lname = '$lname', email = '$email', password = '$password' WHERE user_id = '$user_id'";
    $updateResult = mysqli_query($conn, $updateQuery);

    if ($updateResult) {
        // Redirect to the page where the user list is displayed
        header("Location: fetch.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link rel="stylesheet" href="../styles/fetch.css" />

</head>

<body>
    <h2>Update User</h2>

    <form class="update-1" method="post">
        <table>
            <tr>
                <td>First Name:</td>
                <td><input type="text" name="fname" value="<?php echo $row['fname']; ?>" required></td>
            </tr>
            <tr>
                <td>Last Name:</td>
                <td><input type="text" name="lname" value="<?php echo $row['lname']; ?>" required></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" value="<?php echo $row['email']; ?>" required></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" value="<?php echo $row['password']; ?>" required></td>
            </tr>
        </table>
        <center>

            <input style="
            margin-top:20px;
            width: 100px;
	height: 50px;
	background-color: #31ff38;
	color: #fff;
	padding: 10px;
	border: none;
	border-radius: 4px;
	cursor: pointer;" class="update" type="submit" name="btn_update" value="Update">
        </center>
    </form>
</body>

</html>