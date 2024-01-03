<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $con = mysqli_connect("localhost", "root", "", "realestate") or die("Fail to connect");
    $id = $_POST['id'];
    $sql = "delete from users where id = '$id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: Admin users.php');
    }
}
