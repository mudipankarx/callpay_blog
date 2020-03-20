<?php
require_once('./wp-config.php'); 
$date=date('Y-m-d');
$time=strtotime($date);
global $wpdb;
$wpdb->insert( 
    'wp_wysija_user', 
    array(  
	    'wpuser_id' => '', 
        'email' => $_POST['newsletter'], 
        'firstname' => '', 
		'lastname' => '',
		'ip'=>'',
		'confirmed_ip'=>'',
		'confirmed_at'=>'',
		'last_opened'=>'',
		'last_clicked'=>'',
		'keyuser'=>'',
		'created_at'=>$time,
		'status'=>'1',	
		'domain'=>'gmail',
		'count_confirmations'=>''	
    )
);
//echo $my_id = $wpdb->last_query;
echo "<b style='color:green; margin-left:15px;'>Your have Subscribed sucessfully.</b>";
?>