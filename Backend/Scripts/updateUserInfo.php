<?php
extract($_POST);

$connect=mysqli_connect('localhost','root','','QRStore');
	if($toggle==1){
		$result=mysqli_query($connect,"UPDATE user set uname='$name' , username='$username' where username='".$user."'");
		
		echo $result;
	}
	else {
		$result=mysqli_query($connect,"UPDATE user set password='$password' where username='".$user."'");
		echo $result;
	}
	
	
?>