<?php
$connect = new mysqli("localhost", "root", "", "login");
 if($connect->connect_errno){
	 echo "Failed to connect to mysql :" . $connect->connect_error;
 }
?>
<?php
$trigger = $_GET['trigger'];
switch($trigger){
	case "username_check":{
		$username =$_GET['user'];
		$query = $connect->query("SELECT * FROM login1 WHERE username='$username'");
		$counter = mysqli_num_rows($query);
		if($counter > 0){
			die("exist");
		}
	}
	break;
	case "pin_check":{
		$pin =$_GET['Postal_code'];
		$counter = strlen($pin);
		if($counter < 6 or $counter > 6){
			die("exist");
		}
	}
}	


