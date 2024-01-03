<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $con = mysqli_connect("localhost", "root", "", "realestate") or die("Fail to connect");
    $id = $_POST['property_id'];
    $sql = "delete from properties where property_id = '$id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: Adminlisting.php');
    }
}
?>