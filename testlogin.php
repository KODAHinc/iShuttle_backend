<?php
require "init.php";

$my_query=$con->prepare("SELECT a.Drivers_id,a.Username,a.Password,b.NewGeolat,b.NewGeolng from Drivers_details  a,Drivers_location b;");
$my_query->execute();
$my_query->bind_result($Drivers_id,$Username,$Password,$NewGeolat,$NewGeolng);

$Drivers_details=array();

while($my_query->fetch()){
	$temp=array();
	$temp['Drivers_id']=$Drivers_id;
	$temp['Username']=$Username;
	$temp['Password']=$Password;
	$temp['NewGeolat']=$NewGeolat;
	$temp['NewGeolng']=$NewGeolng;
	array_push($Drivers_details,$temp);
}

echo json_encode($Drivers_details);
mysqli_close($con);

?>