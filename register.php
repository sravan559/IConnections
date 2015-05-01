<?php
// Make a MySQL Connection
$con = mysqli_connect("localhost", "root", "sravi123") or die(mysqli_error());
mysqli_select_db($con,"iconnections") or die(mysqli_error());

if($con){
//echo "<h1> Connection successful</h1>";

if(isset($_POST['agreement']) && isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['gender']) && isset($_POST['email']) && isset($_POST['needchildcare']) && isset($_POST['needtransportation'])){
//echo "<h2>Mandatory fields filled</h2>";
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$needchildcare = $_POST['needchildcare'];
$needtransportation = $_POST['needtransportation'];


if(isset($_POST['month']) && isset($_POST['day']) && isset($_POST['year']) && isset($_POST['country']) && isset($_POST['phone']) && isset($_POST['school']) && isset($_POST['numchild']) && isset($_POST['childcare_info']) && isset($_POST['pickuplocation']) && isset($_POST['comments']) && isset($_POST['agreement'])){


$month = $_POST['month'];
$day = $_POST['day'];
$year = $_POST['year'];
$country = $_POST['country'];
$phone = $_POST['phone'];
$school = $_POST['school'];
$numchild = $_POST['numchild'];
$childcare_info = $_POST['childcare_info'];
$pickuplocation = $_POST['pickuplocation'];
$comments = $_POST['comments'];
$agreement = $_POST['agreement'];
$dob = "$year-$month-$day";
//echo "DATE OF BIRTH: $dob";
}
else{
//initializing unfilled non mandatory fields to null
$month = "";
$day = "";
$year = "";
$country = "";
$phone = "";
$school = "";
$numchild = "";
$childcare_info = "";
$pickuplocation = "";
$comments = "";
$agreement = "";
$dob = "";
}



/*echo "<html><body><table border='1'><tr><td>'$fname'</td><td>'$lname'</td><td>'$gender'</td><td>'$email'</td><td>'$needchildcare'</td><td>'$needtransportation'</td>";
echo "<td></td></tr></table></body></html>"
*/

//After all the fields are initialized to defined or default null values
//insert to database table Reg_Info
$sql = "insert into Reg_Info(fname,lname,
gender,
email,
needchildcare,
needtransportation,
dob,
country,
phone,
school,
numchild,
childcareinfo,
pickuplocation,
comments) values('$fname','$lname','$gender','$email','$needchildcare','$needtransportation','$dob','$country','$phone','$school','$numchild','$childcare_info',
'$pickuplocation','$comments')";

 
echo $sql;
if(mysqli_query($con,$sql)){
echo "<h3>Following user information saved!!</h3>";
echo "<b>Name:</b> $fname $lname<br>";
echo "<b>Gender:</b> $gender<br>";
echo "<b>Email:</b> $email<br>";
echo "<b>NeedChildCare:</b> $needchildcare<br>";
echo "<b>NeedTransportation:</b> $needtransportation<br>";
echo "<b>DOB:</b> $dob<br>";
echo "<b>Country:</b> $country<br>";
echo "<b>Phone:</b> $phone<br>";
echo "<b>School:</b> $school<br>";
echo "<b>NumberOfChildren:</b> $numchild<br>";
echo "<b>ChildCareInfo:</b> $childcare_info<br>";
echo "<b>PickUpLocation:</b> $pickuplocation<br>";

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
