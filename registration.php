<?php include('connection.php') ;
session_start();

//print_r($_POST);   //print all data in array form
 /*   
echo "<br> my first name is: " .$first_name ;
echo "<br> my last name is: " .$last_name ;
echo "<br> my user name is: " .$user_name ;
echo "<br> my user email is: " .$user_email ;
echo "<br>  password is: " .$password ;
echo "<br>  Gender  is: " .$gender_is ;
echo "<br>  date of birth  is: " .$date_birth ;
echo "<br>  Created at Date Time : " .$created_at ;
echo "<br>  Updated at Time: " .$updated_at ;

*/



if($_POST)
{
    $first_name=$_POST['fname'];
    $last_name=$_POST['lname'];
    $user_name=$_POST['username'];
    $user_email=$_POST['useremail'];
    $password=$_POST['password'];
	 $confirm_password=$_POST['cpassword'];
    $gender_is=$_POST['gender'];
	$date_birth=$_POST['birthday'];
    
    if( $password== $confirm_password){
   

$insertquery="insert into users (first_name,last_name,username,email,password,gender,dob,created_at,updated_at) values ('$first_name','$last_name','$user_name','$user_email','$password','$gender_is', '$date_birth', now(),now())";

$database=mysqli_query($connection_check,$insertquery);

if ($database){

  header("Location: login.php");

  
  
}

else {
  echo "Not Inserted";
}

}


else {
  echo '<script>alert("Does Not Match Password")</script>';
}



}


?>

<!DOCTYPE html>
<html>
<head>
<!--css-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<title>Registration Form</title>
<style>
.section-ui{
	background:black;
	
	padding:20px;
	border:1px solid white;
	border-radius:10px;
}

.form-ui{
	background:black;
	
	padding:10px;
	
}


.text-design{
	color:white;
	line-height:40px;
	padding:20px;
	
}



input {
    line-height: 40px;
    margin: 8px;
    width: 300px;
    padding: 8px;
    border: 1px solid black;
    border-radius: 3px;
}

select {
    line-height: 40px;
    margin: 8px;
    width: 300px;
    height: 56px;
    padding: 8px;
    border: 1px solid black;
    border-radius: 3px;
}

.btn-submit{
	
	text-align:center;
	margin-top:10px;
}

.btn-submit button {
    cursor: pointer;
    width: 40%;
    padding: 14px;
    border: 1px solid #07355d;
    border-radius: 27px;
   background: #0fa19e;
	color:white;
}

.btn-submit button:hover {
   
     background: white;
    color: black;
    
}


img {
  
    max-width: 100%;
   
}




</style>
</head>
<body>

<section class="mt-5" >
<div class="container section-ui "  >
 <div class="row">
 
 <div class="col-lg-5">
 <div class=" text-center text-design"> 
 <h2>User Registration Form:</h2>
<p>Fill The Form & Login Now!</p>
 <img  src="rocket.jpg" width="400" height="auto">
 </div>
 </div>
 
 
 
 <div class="col-lg-7 mt-3">

<form class="form-ui text-center" action="" method="post">
<div class="row">
  <div class="col-lg-6 "> <input type="text"  name="fname" placeholder="First Name" required > </div>
  <div class="col-lg-6"> <input type="text"  name="lname" placeholder="Last Name" ></div>
  
  <div class="col-lg-6"> <input type="text"  name="username" placeholder="User Name" required></div>
  <div class="col-lg-6"> <input type="text"  name="useremail" placeholder="User Email" required></div>
  <div class="col-lg-6"> <input type="password"  name="password" placeholder="Password" required></div>
   <div class="col-lg-6"> <input type="password"  name="cpassword" placeholder="Confirm Password" required>
</div>
 
  <!--<div class="mt-3"> <input type="radio" name="gender" value='Female' placeholder ="Female">Female</div>
  <div class="mt-3"> <input type="radio" name="gender" value='Male' placeholder ="Male">Male</div>-->

  <div class="col-lg-6"> 
<select   name="gender" placeholder ="gender" >
 
  <option value="female">Female</option>
  <option value="male">Male</option>
 
</select>

</div>
  
 
 <div class="col-lg-6">
 <input type="date"  name="birthday" placeholder="Date of Birth" >
 </div>
  
 
  
 

 
<div class="col-lg-12 btn-submit">

<button type="submit" name= "submit" > Submit</button>

</div>



 
</div>
</form>


</div>


 


</div>
</div>
</section>



</body>

</html>