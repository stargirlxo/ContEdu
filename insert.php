<?php
include 'con.php';
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $contant = $_POST['contant'];
    $time = $_POST['time'];
    $docus = $_POST['docus'];
    $anothertime = $_POST['anothertime'];
    $dropdown1 = $_POST['dropdown1'];
    $dropdown = $_POST['dropdown'];



    //insert pdf to database uploads is the file used to store the info
    $target_dir = "uploads/";
    $pdf = $target_dir . basename($_FILES["pdf"]["name"]);
    move_uploaded_file($_FILES["pdf"]["tmp_name"], $pdf);
    //to make the link visiable as
    $pdf = 'http://localhost/ContEdo/' . $pdf;



    $query = mysqli_query($con, "INSERT INTO `docs` (`title`, `contant`, `time`, `docus`, `time_To`, `trainning_loc`,`pdf`,`onsite_online`) VALUES ('$title', '$contant', '$time', '$docus','$anothertime','$dropdown1', '$pdf','$dropdown');");
    header ("Location: http://localhost/ContEdo/insertinfo.php");
}