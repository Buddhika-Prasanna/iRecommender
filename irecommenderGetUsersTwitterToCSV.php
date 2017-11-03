<?php

$con = mysqli_connect("localhost","root","","wealthpa_wp752"); 
//on connection failure, throw an error
if(!$con) {  
die('Could not connect: '.mysql_error()); 
echo "error";
}
    $Sql = "SELECT USER_ID, VALUE FROM wp6t_cimy_uef_data WHERE VALUE !='' ";
    $result = mysqli_query($con, $Sql);  

    if(fopen('iRecommender-Logs/Kia/Log.csv',"a") != null){
        unlink('iRecommender-Logs/Kia/Log.csv.csv');
    }
    

    if (mysqli_num_rows($result) > 0) {

     while($row = mysqli_fetch_array($result)) {
       $file = fopen('iRecommender-Logs/Kia/Log.csv',"a");
        /*fputcsv($file,array_values($row));*/
        fputs($file,$row[0]);
        fputs($file," ");
        fputs($file,$row[1]);
        fputs($file, PHP_EOL);
     }
     fclose($file);
} else {
     echo "you have no records";
     }
     

header("Location: http://localhost/iRecommender/admin-dashbord/"); /* Redirect browser */
exit();

?>

