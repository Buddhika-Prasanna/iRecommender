<?php

$con = mysqli_connect("localhost","root","","wealthpa_wp752"); 
//on connection failure, throw an error
if(!$con) {  
die('Could not connect: '.mysql_error()); 
echo "error";
}
    $Sql = "SELECT ID, post_title FROM wp6t_posts WHERE post_type = 'product'";
    $result = mysqli_query($con, $Sql);  

    if(fopen('iRecommender-Logs/SB/ProductList.csv',"a") != null){
        unlink('iRecommender-Logs/SB/ProductList.csv');
    }


    if (mysqli_num_rows($result) > 0) {
     while($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {

       $file = fopen('iRecommender-Logs/SB/ProductList.csv',"a");

        fputcsv($file,array_values($row));
        fclose($file);
       
     }
    
     
} else {
     echo "you have no records";
}

header("Location: http://localhost/iRecommender/admin-dashbord/"); /* Redirect browser */
exit();

?>

