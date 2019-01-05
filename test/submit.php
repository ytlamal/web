<?php
$x=$_POST['firstname'];
$y=$_POST['lastname'];
$z=$_POST['filename'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname="db1";
$conn = new mysqli($servername ,$username , $password , $dbname);
if($conn->connect_error){
	die("failed" . $conn->connect_error);
}
echo "connect ok";
$sql = "INSERT INTO user (fname, Iname,filename) VALUES ( '$x',' $y',$z)";
if($conn->query($sql)===TRUE){
echo "new created";
}else{
	echo"error".$sql."<br>".$conn->error;
}
$conn->close();
?>