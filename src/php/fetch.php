<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch Data</title>
    <link rel="stylesheet" href="../styles/fetch.css" />
</head>

<body>
    <div class="container">
        <center>

            <h2>Chat with As</h2>
        </center>

        <table class="table" border="2px">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Photo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "config.php";

                $add = mysqli_query($conn, "SELECT * FROM user") or die(mysqli_error($conn));

                while ($row = mysqli_fetch_array($add)) {
                    $user_id = $row['user_id'];
                    $fname = $row['fname'];
                    $lname = $row['lname'];
                    $email = $row['email'];
                    $password = $row['password'];
                    $img = $row['img'];
                ?>
                    <tr>
                        <td><?php echo $fname; ?></td>
                        <td><?php echo $lname; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $password; ?></td>
                        <td><img src="../php/images/<?php echo $img; ?>" width="70px" height="70px"></td>
                        <td>
                            <a class="update" href="update.php?user_id=<?php echo $user_id; ?>">Update</a>
                            <a class="delete" href="delete.php?user_id=<?php echo $user_id; ?>">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>