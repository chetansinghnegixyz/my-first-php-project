<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/8d0e03591a.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php
    include 'config.php';

    $sql="Select * from users;
    $result=mysqli_query($conn,$sql);
    if($result->num_rows > 0){
    while($row=$result->fetch_assoc()){
        $id=$row['id'];
        $email=$row['email_address'];
        $password=$row['password'];
?>
<tr>
<td><?php echo $row['id'] . "<br>"?></td>
<td><?php echo $row['email_address'] . "<br>"?></td>
<td><?php echo $row['password'] . "<br>"?></td>

</tr>
<?php
}
}
else
{
echo "No Record Fetch". "<br>";
}
mysqli_close($conn);
?>
    <div class="container mt-5 d-flex justify-content-center align-items-center" style="min-height: 70vh;">
        <div class="card" style="width: 35rem; background-color: rgba(0,0,0,0.4)">
            <div class="card-header">
                <h2 class="text-center">Login</h2>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        <input type="email" class="form-control" placeholder="Email address" name="tmail" required="required">
                    </div>
                    <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                        <input type="password" class="form-control" placeholder="Password" name="tpass" required="required">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary w-100" name="submit">Login Now</button>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center text text-light">
                Don't have an account?<a href="registration.php">Sign Up</a>
            </div>
        </div>
    </div>
</body>
</html>