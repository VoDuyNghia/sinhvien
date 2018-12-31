<?php

 
$acceptedExtension = Array('image/jpeg', 'image/jpg', 'image/pjpg', 'image/pjpeg', 'image/png', 'image/gif'); // add here allowed extensions
$maxSize = 5000000; //image size max = 5Mb
$destFolder = 'upload/';
 
echo '<div class="row">'; // Bootstrap CSS Thumbnails
for($i=0; $i<count($_FILES['image']['name']); $i++) { // Loop through each file
	
	$imgType = $_FILES["image"]["type"][$i];
	$imgSize = $_FILES["image"]["size"][$i];
	$imgName = $_FILES["image"]["name"][$i];
	$imgTmpName = $_FILES["image"]["tmp_name"][$i];
 
	
 
}
echo '</div>';
 
// crop function (feel free to adapt)
function crop_img ($image, $thumb_width, $thumb_height) {
	$filename = $image;
	$image = imagecreatefromstring(file_get_contents("$image"));
 
	$width = imagesx($image);
	$height = imagesy($image);
 
	$original_aspect = $width / $height;
	$thumb_aspect = $thumb_width / $thumb_height;
 
	if ( $original_aspect >= $thumb_aspect ) {
	   // If image is wider than thumbnail (in aspect ratio sense)
	   $new_height = $thumb_height;
	   $new_width = $width / ($height / $thumb_height);
	} else {
	   // If the thumbnail is wider than the image
	   $new_width = $thumb_width;
	   $new_height = $height / ($width / $thumb_width);
	}
 
	$thumb = imagecreatetruecolor($thumb_width, $thumb_height);
 
	// Resize and crop
	imagecopyresampled($thumb,
					   $image,
					   0 - ($new_width - $thumb_width) / 2, // Center the image horizontally
					   0 - ($new_height - $thumb_height) / 2, // Center the image vertically
					   0, 0,
					   $new_width, $new_height,
					   $width, $height);
	
	return imagejpeg($thumb, $filename, 80);
}
 
// convert string function (feel free to adapt)
function convert_str($str) {	
	$str = str_replace(
		array(' : ',': ',' !',' ?','!','?','"','\'',', ','(',')',' / ','/',' « ',' » ','  ',' ','&','_', '#'),
		array(  '-', '-',  '',  '', '', '', '', '-', '-', '', '',  '-','-',  '-',  '-', '-','-','-','-', ''),
		$str
	);
 
	$str = str_replace(
		array('    ','   ','  ',' ','----','---','--'),
		array(    '',   '',  '', '',   '-',  '-', '-'),
		$str
	);
	
	$str = strtolower($str);
	
	return $str;
}
?>