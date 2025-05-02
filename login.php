<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "instagram";
$conn= mysqli_connect($server, $user, $password, $database);
if(isset($_POST["login"])){
    $user=$_POST["username"];
    $pass=$_POST["pass"];
    $querry = "INSERT INTO accountsig(Username, Password) 
    VALUES('$user','$pass')";
    mysqli_query($conn,$querry);
    header("location:home.php");
}
?>