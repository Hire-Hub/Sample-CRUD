<?php
    include 'connect.php';

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];


        $sql = "insert into `crud` (name,email,mobile,password) values('$name','$email','$mobile','$password')";
        $result = mysqli_query($con,$sql);
        if ($result) {
            // echo "Data inserted successfully";
            header('location:index.php');
        }
        else{
            die(mysqli_error($con));
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
</head>
<body>
    <div class="container">
        <form method="post" class="my-3">
             <div class="form-group my-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control my-2" placeholder="enter your name here" autocomplete="off">
            </div>
            <div class="form-group my-3">
                <label>Email</label>
                <input type="text" name="email" class="form-control my-2" placeholder="enter your email here" autocomplete="off">
            </div>
            <div class="form-group my-3">
                <label>Phone Number</label>
                <input type="number" name="mobile" class="form-control my-2" placeholder="enter your phone number here" autocomplete="off">
            </div>
            <div class="form-group my-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control my-2" placeholder="enter your password here" autocomplete="off">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            <a href="index.php" class="btn btn-primary">Return</a>
        </form>
    </div>

</body>
</html>