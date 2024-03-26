<?php
include 'connect.php';
$id = $_GET['updateid'];
$sql = "SELECT * FROM `crud` WHERE id='$id'";
$result = mysqli_query($conn, $sql);
if ($result) {
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $email = $row['email'];
    $mobile = $row['mobile'];
    $password = $row['password'];
}
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];


    $sql = "UPDATE `crud` SET id = '$id',name='$name',email='$email',mobile=$mobile,password='$password' WHERE `crud`.`id` = $id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        // echo "data updated successfully";
        header('location:display.php');
    } else {
        die(mysqli_error($conn));
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label ass="form-label">name</label>
                <input type="text" class="form-control" name="name" autocomplete="off" value=<?php echo $name ?> placeholder="Enter Your name">
            </div>
            <div class="mb-3">
                <label class="form-label">email</label>
                <input type="email" class="form-control" name="email" autocomplete="off" value=<?php echo $email ?> placeholder="Enter Your email">
            </div>
            <div class="mb-3">
                <label class="form-label">Mobile</label>
                <input type="text" class="form-control" name="mobile" autocomplete="off" value=<?php echo $mobile ?> placeholder="Enter Your mobile number">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password" autocomplete="off" value=<?php echo $password ?> placeholder="Enter Your password">
            </div>
            <button type="submit" class="btn btn-primary" name='submit'>Update</button>
        </form>

    </div>

</body>

</html>