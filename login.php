<?php
require_once 'config/database.php';
if(empty($_POST['user']) && empty($_POST['pass'])){
	echo "Enter username and password!";
}

if(!empty($_POST['user']) && !empty($_POST['pass'])) {
	$user=$_POST['user'];
	$pass=$_POST['pass'];

	

	$query=mysqli_query($conn,"SELECT * FROM users WHERE username='".$user."' AND password='".$pass."'");
	$numrows=mysqli_num_rows($query);
	if($numrows!=0)
	{
	while($row=mysqli_fetch_assoc($query))
	{
	$dbusername=$row['username'];
	$dbpassword=$row['password'];
	}

	if($user == $dbusername && $pass == $dbpassword)
	{
	session_start();
	$_SESSION['sess_user']=$user;

	/* Redirect browser */
	header("Location: admin.php");
	}
	} else {
	echo "Invalid username or password!";
	}


}
?>