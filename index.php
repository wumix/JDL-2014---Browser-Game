<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);

session_start();
if($_SESSION['logged']==false){
if(isset($_POST["submit"])){

	$myusername=$_POST['user'];
	$mypasswordnc=$_POST['pass'];

	if($mypasswordnc == "pass" && $myusername == "user"){
		$_SESSION['logged']=true;
			echo "te-ai logat!";
			header("location:logged.php");

	}
}}
else
header("location:logged.php");
?>

<form role="form" method="post">
				  		
						<label for="exampleInputEmail1">Username</label>
						<input name="user" type="text"  id="exampleInputUser1" placeholder="Enter username">
						<label for="exampleInputPassword1">Password</label>
						<input name="pass" type="password" id="exampleInputPassword1" placeholder="Password">
				  	</div>
				  <button name="submit" type="submit">Login</button>
</form>