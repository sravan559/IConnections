<?php
// Make a MySQL Connection
$con = mysqli_connect("localhost", "root", "sravi123") or die(mysqli_error());
mysqli_select_db($con,"iconnections") or die(mysqli_error());

if($con){
//echo "<h1> Connection successful</h1>";

if(isset($_POST['subject']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message'])){
//echo "<h2>Mandatory fields filled</h2>";
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

 
echo $sql;
if(mysqli_query($con,$sql)){
echo "<h3>Following user information saved!!</h3>";
echo "<b>Name:</b> $name<br>";
echo "<b>Email:</b> $email";
}
else{
echo "<h2>Insertion failed</h2>";
}
}
else{
echo "<h2>One or more mandatory fields needs to be filled. Please fill all the mandatory fields(marked with *)</h2>";
}

}

?>
