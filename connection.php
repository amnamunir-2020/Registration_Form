<?php 

$mysql_host="localhost";
$mysql_user="root";
$mysql_password="";
$db_con="user_db";


$connection_check=mysqli_connect($mysql_host,$mysql_user,$mysql_password,$db_con);

if($connection_check){

$connections = "Connection Success!" ;

}

else {

    $connections= "Connection failed!" ;
}

//echo $connections;


?>