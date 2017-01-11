<?php
$dir = "uploads1/";
$file = $dir . $_FILES["fileToUpload"]["name"];
$upload = 1;
$imageFileType = pathinfo($file,PATHINFO_EXTENSION);
if(isset($_POST["submit"])) 
{
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) 
	{
        echo "File is an image - " . $check["mime"] . ".";
        $upload= 1;
    } 
	else 
	{
        echo "File is not an image.";
        $upload= 0;
    }
}
    if ($upload == 0) 
    {
    echo "File was not uploaded.";
	} 
    else 
	{
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $file)) 
	{
        echo "The file ".  $_FILES["fileToUpload"]["name"]. " has been uploaded.";
    } 
	else 
	{
        echo "There was an error uploading your file.";
    }
}
?>