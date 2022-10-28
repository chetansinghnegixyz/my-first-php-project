<?php
$conn=new mysqli("localhost","root","", "mydb");
if($conn){
    echo "<h3>Connected successfully</h3>";
}
else{
    mysqli_error($conn);
}
    if(isset($_POST['submit'])){
    $name=$_POST['tname'];
    $email=$_POST['tmail'];
    $mobile=$_POST['tmob'];
    $password=$_POST['tpass'];
    $confirm_password=$_POST['tcpass'];

    $sql="insert into users(name, email, mobile, password) values('$name', '$email', '$mobile', '$password')";

    if(mysqli_query($conn,$sql)){
        echo "Account created successfully";
    }
    else{
        echo "Error created account" . mysqli_error($conn);
        }
    mysqli_close($conn);
}
?>

