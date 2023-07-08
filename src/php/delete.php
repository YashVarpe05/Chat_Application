<?php
include "config.php";

if (isset($_GET['user_id'])) {
    $delete = mysqli_query($conn, "DELETE FROM user WHERE user_id='" . $_GET['user_id'] . "'");

    if ($delete) {
        echo "<script>;";
        echo "alert('Record Delete....!');";
        echo 'window.location.href = "fetch.php";';
        echo "</script>;";
    } else {
        echo "<script>;";
        echo "alert('Data error....!');";
        echo 'window.location.href = "fetch.php";';
        echo "</script>;";
    }
}
