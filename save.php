<?php
 	//Show the image
	//echo '<img src="'.$_POST['img_val'].'" />';
 
	//Get the base-64 string from data
	$filteredData=substr($_POST['img_val'], strpos($_POST['img_val'], ",")+1);
 
	//Decode the string
	$unencodedData=base64_decode($filteredData);

	//Save the image
	$filename = 'img_'.date('Y-m-d-H-s').'.png';
	file_put_contents($filename, $unencodedData);
?>