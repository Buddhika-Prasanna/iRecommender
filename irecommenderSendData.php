<?php 
global $wp;
include 'wp-includes/user.php';

/*$current_user_data = wp_get_current_user();*/




/*$twitter=$_POST["twitter"]; 
$age=$_POST["age"]; 
$location=$_POST["location"]; */


/*echo $twitter;
echo $age;
echo $location;*/

//establish connection
$con = mysqli_connect("localhost","root","","wealthpa_wp752"); 
//on connection failure, throw an error
if(!$con) {  
die('Could not connect: '.mysql_error()); 
echo "error";
}

/*$sql="INSERT INTO wp6t_custom_data(user_id, age, location, twitter_id) VALUES (4,'".$age."','".$location."','".$twitter."')";*/

$sql="INSERT INTO wp6t_custom_data(user_id, age, location, twitter_id) VALUES (1,24,'teest','tese')";

mysqli_query($con,$sql);

echo $sql;

?>