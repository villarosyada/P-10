<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylea.css" media="screen" title="no title">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    
<?php
require 'koneksi.php';
$email = $_POST["email"];
$password = $_POST["password"];

$query_sql = "SELECT * FROM db_user
            WHERE email = '$email' AND password = '$password'";

$result = mysqli_query($conn, $query_sql);

if (mysqli_num_rows($result) > 0) {
    header("Location: dashboard.php");
} else {
    echo "<center><h1>Email atau Password Anda Salah Silahkan Coba Login Kembali....</h1>
            <button><strong><a href='index.html'>Login</a></strong></button></center>";
}
