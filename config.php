<?php 
$username="dev1";
$password="Abc@1234Abc@1234";
$host="154.222.143.39";
$database="possytem";
$db_link=mysqli_connect($host,$username,$password,$database)or die("ERROR".mysqli_error($db_link));
if (mysqli_connect_error()){
	echo "Could not connect to MySql. Please try again";
	exit();
}
?>
