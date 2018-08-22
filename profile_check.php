<?php
require 'connect.php';
$fname = $_GET['firstname'];
$lname = $_GET['lastname'];
$uname = $_GET['username'];
$ename = $_GET['email'];
$aname = $_GET['address'];
$cname = $_GET['country'];
$sname = $_GET['state'];
$caname = $_GET['career'];
$age = $_GET['age'];
$time = $_GET['time'];

$sql = "INSERT INTO profile (fname,lname,uname,ename,address,country,state,career,age,freet) 
		VALUES ('" . $fname . "','" . $lname . "','" . $uname . "','" . $ename . "','" . $aname . "','" . $cname . "','" . $sname . "','" . $caname . "','" . $age . "','" . $time . "')";

$query = mysqli_query($conn, $sql);

if ($query) {
    echo "Record add successfully";
    echo "<script language=\"JavaScript\">";
    echo "alert('เพิ่มมูลเรียบร้อยแล้ว');";
    echo 'window.location= "add_thing.php"';
    echo "</script>";
}else {
    echo "Nooooo";
}

mysqli_close($conn);
?>