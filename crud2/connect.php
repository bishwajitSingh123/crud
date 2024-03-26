<?php
$conn = new mysqli("localhost", "root", "", "crudoperation");
if (!$conn) {
    echo "success";

    die(mysqli_error($conn));
}
