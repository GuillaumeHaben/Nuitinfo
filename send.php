<?php

function make_thumb($src, $dest, $desired_width) {

	/* read the source image */
	$source_image = imagecreatefromjpeg($src);
	$width = imagesx($source_image);
	$height = imagesy($source_image);
	
	/* find the "desired height" of this thumbnail, relative to the desired width  */
	$desired_height = floor($height * ($desired_width / $width));
	
	/* create a new, "virtual" image */
	$virtual_image = imagecreatetruecolor($desired_width, $desired_height);
	
	/* copy source image at a resized size */
	imagecopyresampled($virtual_image, $source_image, 0, 0, 0, 0, $desired_width, $desired_height, $width, $height);
	
	/* create the physical thumbnail image to its destination */
	imagejpeg($virtual_image, $dest);
}

$ds          = DIRECTORY_SEPARATOR;
 
$storeFolder = 'img/works/photos';
 
if (!empty($_FILES)) {
     
    $tempFile = $_FILES['file']['tmp_name'];   
      
    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;
     
    $targetFile =  $targetPath. $_FILES['file']['name']. ".jpg";
 
    move_uploaded_file($tempFile,$targetFile);
	
	make_thumb($targetFile, $targetFile . "thumb.jpg", 263);
     
}

?>