<?php 

session_start();

include("connection.php");
include ("function.php");

if($_SERVER['REQUEST_METHOD']=="POST")
//{
	//posted something :
	/*$user_name = $_POST['user_name'];
	$password = $_POST['password'];

	if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
	{
		//insert into data base:
		$user_id =random_num(20);

		 $query = "select * from users where user_name='$user_name' limit 1";
		 
		 $result = mysqli_query($con,$query);
		 if($result)
		 {
		 	if($result && mysqli_num_rows($result)>0)
			 {
			 	$user_data= mysqli_fetch_assoc($result);
			 	if($user_data['password']==$password)
			 	{
			 		$_SESSON['user_id']=$user_data['user_id'];
			 		header("Location: index.php");
		    	    die;
			 	}

			 }

		 }
		 
		 echo "Please write valid user name or password";
		 

	}
	else 
	{
		echo "Please write valid user name or password";
	}


}*/

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

	<style type="text/css">
	
	</style>

	<div id="box">
      <h1 class="form-title">Login</h1>
      <form  method="post">
        <div class="main-user-info">


          <div class="login-box">
            <label for="fullName">User Name</label>
            <input class="text" type="text" name="name"  placeholder="enter your name" >
          </div>
        </div>
			
		</form>
	</div>
</body>
</html>