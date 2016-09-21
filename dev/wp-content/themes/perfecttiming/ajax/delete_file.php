<?php 
include('../../../../wp-config.php');

global $wpdb;

$file_name = $_POST['file_name'];

$session_id =$_POST['session_id'];
$path=ABSPATH.'cimages/'.$file_name.'';
unlink($path);

$sql_query = $wpdb->query(
              ' DELETE  FROM  im_images
                WHERE file_name = "'.$file_name.'" AND session_id = "'.$session_id.'" AND status = "0"' 
			);

if($sql_query)
{
	echo '1';
}
else
{
	echo '0';
}
?>