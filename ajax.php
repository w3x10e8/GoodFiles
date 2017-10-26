<?php

$server='127.0.0.1';
$username='root';
$password='';
$db='bs';

$con= mysqli_connect($server,$username,$password,$db);

   function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if($_SERVER["REQUEST_METHOD"]=="POST"){

if(isset($_POST['type'])){

	$type=test_input($_POST['type']);
}
if(isset($_POST['dat'])){

	$dat=test_input($_POST['dat']);
}
if(isset($_POST['user_id'])){

	$user_id=test_input($_POST['user_id']);
}

if(isset($_POST['dat']))
{
	if($type==0){

	$sql2="UPDATE tnp_users SET cgpa=$dat WHERE user_id=$user_id";
	if (mysqli_query($con, $sql2)) {
		    echo "Record updated successfully";

    
}

}

if($type==1){

	$sql2="UPDATE tnp_users SET strikes=$dat WHERE user_id=$user_id";
	if (mysqli_query($con, $sql2)) {
		    echo "Record updated successfully";

    
}

}

}


}

?>