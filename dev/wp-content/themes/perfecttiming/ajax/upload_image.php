<?php 

include('../../../../wp-config.php');
global $wpdb;


$session_id = $_POST['session_id']; 

$my_data=$_FILES['file'];

$len=count($_FILES['file']['name']);

// echo '<pre>';

// print_r($_FILES['file']);

// echo '</pre>';

$date=date("Y/m/d");
//$getPath	 =	getcwd();

$uploads_dir = ABSPATH."/cimages/";  
for($i=0;$i<$len;$i++) 
{
	$tmp_name = $my_data["tmp_name"][$i];
	$name = basename($my_data["name"][$i]);
	
	if(move_uploaded_file($tmp_name, $uploads_dir.$name))
	{
		$wpdb->insert('im_images', array(
			'file_name' => $name,
			'status' => '0',
			'upload_date' =>$date,
			'session_id' =>$session_id
			
		));
	?>
		<li id="pid_<?php echo $i;?>" del_id="<?php echo $i;?>" >
	<?php
			echo $name;
	?>
		<a href="#" title="remove"  class="fa fa-times-circle fa-lg closeBtn" file_name="<?php echo $name;?>" del_id="<?php echo $i;?>" session_id="<?php echo $session_id ;?>" ></a>
		</li>
	<?php 
	}
	else
	{
		echo $error;
	}
	
}

// foreach($_FILES['file']['name'] as $filename)
// {

// echo $filename;

// echo '<pre>';

	 // print_r($filename) //$filename->name;
	 
// echo '</pre>'

//}

		// $getPath	=	getcwd();
		// $uploads_dir = $getPath."/cimages/"; 
		// foreach ($_FILES["filesToUpload"]["error"] as $key => $error) 
		// {
			// echo 'hiiii';
			// if ($error == UPLOAD_ERR_OK) 
			// {
				// $tmp_name = $_FILES["filesToUpload"]["tmp_name"];
				
				 // $name = basename($_FILES["filesToUpload"]["name"]);
				// if(move_uploaded_file($tmp_name, $uploads_dir.$name))
				// {
					// echo 'done';
					// echo $name;
				// }
				// else
				// {
					// echo $error;
				// }
			// }

		// }
die;
?>