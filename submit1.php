<?php
$connect = new mysqli("localhost", "root", "", "login");
 if($connect->connect_errno){
	 echo "Failed to connect to mysql :" . $connect->connect_error;
 }
?>
<?php
$name1=$_GET["Fname"];
$name2=$_GET["Mname"];
$name3=$_GET["Ltitle"];
$dob=$_GET["bday"];
$gender=$_GET["sex"];
$address=$_GET["addr"];
$city=$_GET["city"];
$state=$_GET["state"];
$pin=$_GET["pin"];
$country=$_GET["country"];
$degree=$_GET["deg"];
$institute=$_GET["insti"];
$grades=$_GET["grade"];
$username=$_GET["user"];
$password=$_GET["pass"];


$sql_line= "INSERT INTO login1 VALUES('','$name1', '$name2', '$name3','$dob','$gender', '$address', '$city', '$state','$pin', '$country','$degree','$institute','$grades','$username', '$password')";
$query = $connect->query($sql_line);
$connect->close();
echo"success";
?> 