<?php
include 'connect.php';
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $sql = "DELETE FROM `crud` WHERE `crud`.`id` = $id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        // echo "data deleted successfully";
        header('location:display.php');
    } else {
        die(mysqli_error($conn));
    }
}
