<?php
// Make a MySQL Connection
$con = mysqli_connect("localhost", "root", "sravi123") or die(mysqli_error());
mysqli_select_db($con,"iconnections") or die(mysqli_error());

if($con){

if(isset($_POST['subject']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message'])){
$subject = $_POST['subject'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];


//After all the fields are initialized to defined or default null values
//insert to database table Reg_Info
$sql = "insert into contactus(subject,
name,
email,
phone,
message) values('$subject','$name','$email','$phone','$message')";

mysqli_query($con,$sql);
echo "<h1 style='text-align: center; color: red;'>Thank you for contacting us. Will get back to you shortly.</h1>";
}

}
mysqli_close($con);

?>
