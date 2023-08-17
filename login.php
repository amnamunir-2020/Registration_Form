
<!DOCTYPE html>
<html>
<head>
<!--css-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<title>Login</title>


<style>


.login-form{
	background:black;
	
	padding:20px;
	border:1px solid white;
	border-radius:10px;
	width:50%;
	max-width:100%;
	height: 500px;
	
}

.login-ui {
    background: #0c1e32;
    margin-top:50px;
    width: 50%;
    display: inline-block;
    align-items: center;
    padding: 15px;
    height: 350px;
}

.login-ui h2{
	color:white;
	line-height:40px;
}

input {
    line-height: 40px;
    margin: 8px;
    width: 250px;
    padding: 8px;
    border: 1px solid black;
    border-radius: 3px;


}


.btn-login button {
    cursor: pointer;
    width: 90%;
    padding: 15px;
    line-height: 20px;
    border: 1px solid #07355d;
    border-radius: 5px;
  
    font-weight: bold;
    margin-top: 15px;
	background: #0fa19e;
	color:white;
}



.btn-login button:hover {
   
     background: white;
    color: black;
    
}


</style>
</head>
<body>

<div class="container login-form  mt-5 " >
 
<div class="row">


<div class="col-lg-12 text-center ">


<form class="login-ui  " method="post">
<img src="user.jpg" width="40" height="auto">
 <h2>Login Form</h2>
  <div class="col-lg-6"> <input type="email"  name="useremail"   placeholder="User Email" required> </div>
  <div class="col-lg-6"> <input type="password"  name="password"   placeholder="Password" required></div>
 

 
<div class="col-lg-12 btn-login ">
<button type="submit" name= "submit" value="submit" > Login</button>
</div>


</form>

</div>
</div>
</div>

<?php



if(isset($_POST['submit'])){
include('connection.php') ;

 $usermail=mysqli_real_escape_string($connection_check,$_POST['useremail']) ;                            //if secure mysqli function $usermail=$_POST['em']; 
 $userpassword=$_POST['password'];
 $useremail=$_POST['useremail'];

//sql query

 
 
$sql="select * from users where email='{$usermail}' and password='{$userpassword}' ";

//echo $sql;



$result=mysqli_query($connection_check,$sql);
if(mysqli_num_rows($result)>0){
	
	while($row=mysqli_fetch_array($result)){
		
		session_start();
		$_SESSION["mailid"]=$row['email'];
		$_SESSION["passid"]=$row['password'];
		
		
		
		header("Location: home.php");
		
	}
	
}
	
	else
	{
		echo '<script>alert("Wrong Username & Password")</script>';
	}
	
	
}


?>










</body>

</html>