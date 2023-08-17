<?php  include('connection.php') ;
session_start();



//data fecth from database mysql phpmyadmin

//many mysqli function used for some purpose!




$selectquery="select username,gender,dob  from users where email='{$usermail}' and password='{$userpassword}' ";

$query= mysqli_query($connection_check,$selectquery);               //connection with two parameter

$row_no=mysqli_num_rows($query);                          //fetch number of rows


//$result=mysqli_fetch_array($query);                  //fetch array

// echo "Number of Rows "  .$result[2] ; 

while($mydata=mysqli_fetch_array($query)){
  
  session_start();
		
		$_SESSION["mailid"]=$row_no['useremail'];
		$_SESSION["passwordid"]=$row_no['password'];
   

   echo   " <hr><td>User Name:</td>"  .$mydata['username']     ."<br>"  ;
   echo   "<td>DOB:</td>"          .$mydata['dob']          ."<br>"  ;
    echo   "<td>Gender:</td> "      .$mydata['gender']     ."<br>"  ;
  


 
 /*
 echo $mydata['username']." <hr>"  ;  echo $mydata['gender']." <hr>"   ;  echo $mydata['id']." <hr>";
   echo $mydata['first_name']." <hr>";    echo $mydata['last_name']." <hr>";  echo $mydata['email']." <hr>";*/
 

} 













?>