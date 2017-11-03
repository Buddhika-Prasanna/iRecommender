<?php

$con = mysqli_connect("localhost","root","","wealthpa_wp752"); 
//on connection failure, throw an error
if(!$con) {  
die('Could not connect: '.mysql_error()); 
echo "error";
}
    $Sql = "SELECT b.user_id, a.ID, c.meta_value, c.meta_key, b.comment_ID FROM wp6t_posts a, wp6t_comments b, wp6t_commentmeta c WHERE c.comment_id = b.comment_ID AND b.comment_post_ID = a.ID AND c.meta_key = 'rating'";
    $result = mysqli_query($con, $Sql);  

    if(fopen('iRecommender-Logs/SB/Ratings.csv',"a") != null){
        unlink('iRecommender-Logs/SB/Ratings.csv');
    }
    

    if (mysqli_num_rows($result) > 0) {

     while($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
       $file = fopen('iRecommender-Logs/SB/Ratings.csv',"a");

        fputcsv($file,array_values($row));
     }
     fclose($file);
} else {
     echo "you have no records";
     }
     

header("Location: http://localhost/iRecommender/admin-dashbord/"); /* Redirect browser */
exit();

?>

