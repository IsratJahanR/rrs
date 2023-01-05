<?php 

session_start();
include("connection.php");
//include ("function.php");

if($_SERVER['REQUEST_METHOD']=="POST")
{
	//posted something :
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$nid = $_POST['nid'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];

	if(!empty($name) && !empty($phone) && !empty($email) && !empty($nid) && !empty($gender) && !empty($address) && !empty($password) && !empty($cpassword))
	{
		//insert into data base:
		//$user_id =random_num(20);

		$query = "INSERT INTO users(nid, name, mobile, email, gender, Address, password) VALUES ('$nid','$name','$phone','$email','$gender','$address','$password')";

		 mysqli_query($con,$query);
		 header("Location: home.php");
	     die;

	}
	else 
	{
		echo "Please write valid user name or password";
	}


}

	
?>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Registration</title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
      <nav>
         <div class="logo">
           <h3>Bangladesh Railway</h3>
         </div>
         <input type="checkbox" id="click">
         <label for="click" class="menu-btn">
         <i class="fas fa-bars"></i>
         </label>
         <ul>
            <li><a href="home.php">Home</a></li>
            <li><a  href="registration.php">Login</a></li>
            <li><a class="active"  href="registration.php">Register</a></li>
            <li><a href="registration.php">Train information</a></li>
            <li><a href="registration.php">Contract us</a></li>
        </ul>
      </nav>
     <div class="container">
      <h1 class="form-title">Registration</h1>
      <form  method="post">
        <div class="main-user-info">


          <div class="user-input-box">
            <label for="fullName">User Name</label>
            <input class="text" type="text" name="name"  placeholder="enter your name" >
          </div>


          <div class="user-input-box">
            <label for="username">E-mail</label>
            <input class="text" type="email" name="email" placeholder="E-mail">
          </div>

          

          <div class="user-input-box">
            <label for="phoneNumber">Mobile Number</label>
            <input class="text" type="phone" name="phone" placeholder="Mobile Number">
          </div>

		  <div class="user-input-box">
            <label for="email">NID</label>
            <input class="text" type="number" name="nid" placeholder="NID">
          </div>

          <div class="user-input-box">
            <label for="password">Password</label>
			<input class="text" type="password" name="password" placeholder="Enter Password">
          </div>
          <div class="user-input-box">
            <label for="confirmPassword">Confirm Password</label>
            <input class="text" type="password" name="cpassword" placeholder="Confirm Password">
          </div>

		  <div class="user-address">
            <label for="Address">Address</label>
            <input class="text" type="text" name="address" >
          </div>

		  <div class="gender-details-box">
          <span class="gender-title">Gender</span>
          <div class="gender-category">
            <input type="radio" name="gender" id="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" id="female">
            <label for="female">Female</label>
            <input type="radio" name="gender" id="other">
            <label for="other">Other</label>
          </div>
        </div>


        <div class="form-submit-btn">
		  <input class="button" onclick="alert('Signup Successfully')" type="submit" value="Signup">
			<a href="login.php"> Already Registered?</a><br><br>
        </div>

    </div>

	</form>
    </div>

	
   </body>
</html>