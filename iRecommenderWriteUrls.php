<?php
global $wp;

$current_user = wp_get_current_user();
    /**
     * @example Safe usage: $current_user = wp_get_current_user();
     * if ( !($current_user instanceof WP_User) )
     *     return;
     */
 /*   echo 'Username: ' . $current_user->user_login . '<br />';
    echo 'User email: ' . $current_user->user_email . '<br />';
    echo 'User first name: ' . $current_user->user_firstname . '<br />';
    echo 'User last name: ' . $current_user->user_lastname . '<br />';
    echo 'User display name: ' . $current_user->display_name . '<br />';
    echo 'User ID: ' . $current_user->ID . '<br />';

*/

$user_id = $current_user->ID;

$current_url = home_url(add_query_arg(array(),$wp->request));

if ($user_id != 0) {
    $file = fopen('iRecommender-Logs/'.$current_user->ID . '.csv',"a");

/*    $handle = fopen($current_user->ID . '.csv', "w");
    fputcsv($handle, $current_url);*/


    fputcsv($file,explode(',',$current_url ));
    fclose($file);
}



 ?>