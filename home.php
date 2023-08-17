
<?php  include('connection.php') ;
session_start();



//data fecth from database mysql phpmyadmin

//many mysqli function used for some purpose!


$selectquery="select username,gender,dob  from users  ";

$query= mysqli_query($connection_check,$selectquery);               //connection with two parameter

$row_no=mysqli_num_rows($query);                          //fetch number of rows


//$result=mysqli_fetch_array($query);                  //fetch array

// echo "Number of Rows "  .$result[2] ; 

while($mydata=mysqli_fetch_array($query)){
  
  
		
  /* 

   echo   " <hr><td>User Name:</td>"  .$mydata['username']     ."<br>"  ;
   echo   "<td>Gender:</td>"          .$mydata['gender']          ."<br>"  ;
    echo   "<td>Dob:</td> "      .$mydata['dob']     ."<br>"  ;
  */


} 



$chh=$_SESSION["mailid"];
$pass=$_SESSION["passid"];
$queryy= mysqli_query($connection_check,"select username,dob,gender from users where email='$chh' and password='$pass' "); 
$rowwise=mysqli_fetch_array($queryy);
	
$userlogin=$rowwise['username'];
$userdob=$rowwise['dob'];
$usergender=$rowwise['gender'];




//echo "<td>User Email: </td> "        .$chh   ." <br>";
//echo "<td>User Password: </td> "        .$pass   ." <br>";
//echo "<td>User Name: </td> "        .$userlogin   ." <br>";
//echo "<td>Date Of Birth: </td> "    .$userdob     ." <br>";
//echo "<td>User Gender: </td> "      .$usergender  ." <br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<body>
<div class="container mt-5">

<div class="text-center">
<h2>User Data</h2>
</div>
<table class="table table-dark">
  <thead>
    <tr>
      
      <th scope="col">User Name</th>
      <th scope="col">Date Of Birth</th>
	  <th scope="col">Gender</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td><?php echo "$userlogin"  ?> </td>
      <td><?php echo "$userdob"    ?>   </td>
      <td><?php echo "$usergender" ?>  </td>
    </tr>
   
   
  </tbody>
</table>
</div>




</body>
</html>




<!--

<body>
<div class="container mt-5">

<div class="text-center">
<h2>User Data</h2>
</div>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">User Email</th>
	  <th scope="col">User Password</th>
      <th scope="col">User Name</th>
      <th scope="col">Date Of Birth</th>
	  <th scope="col">Gender</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo "$chh"  ?> </td> //user login with id user information 
	  <td><?php echo "$pass "  ?> </td>//user login with pass user information 
      <td><?php echo "$userlogin"  ?> </td>
      <td><?php echo "$userdob"    ?>   </td>
      <td><?php echo "$usergender" ?>  </td>
    </tr>
   
   
  </tbody>
</table>
</div>




</body>-->