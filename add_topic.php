<?php
session_start();
if(!isset($_SESSION["sess_email"])){
    header("location: message.php");
} else {
    $name = $_SESSION['sess_name'];
}
?>
<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password="^_^iambatman"; // Mysql password
$db_name="forum"; // Database name
$tbl_name="forum_question"; // Table name

// Connect to server and select database.
$con = mysqli_connect("$host", "$username", "$password")or die("cannot connect");
mysqli_select_db($con, "$db_name")or die("cannot select DB");



// get data that sent from form
$topic=$_POST['topic'];
$detail=$_POST['detail'];
$name=$_SESSION['sess_name'];
$email=$_SESSION['sess_email'];

$datetime=date("d/m/y h:i:s"); //create date time

$sql="INSERT INTO $tbl_name(topic, detail, name, email, datetime)VALUES('$topic', '$detail', '$name', '$email', '$datetime')";
$result=mysqli_query($con, $sql);

if($result){
    echo "<script>alert('Successful')</script>";
    header("location: main_forum.php");
}
else {
echo "<script>alert('Error!')</script>";
}
mysqli_close($con);
?>
