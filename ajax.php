<?php
 
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt'); // valid extensions
$path = 'images/'; // upload directory
 
if(!empty($_POST['message']) || $_FILES['image'])
{
$img = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];
 
// get uploaded file's extension
$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
 
// can upload same image using rand function
$final_image = rand(1000,1000000).$img;
 
// check's valid format
if(in_array($ext, $valid_extensions)) 
{ 
$path = $path.strtolower($final_image); 
 
if(move_uploaded_file($tmp,$path)) 
{
echo "<img src='$path' />";
$name = $_POST['message'];
 
//include database configuration file
include_once 'db.php';
 
//insert form data in the database
$insert = $db->query("INSERT file (message,file_name) VALUES ('".$message."','".$path."')");
 
//echo $insert?'ok':'err';
}
} 
else 
{
echo 'invalid';
}

if($errorimg > 0){
 
   die('<div class="alert alert-danger" role="alert"> An error occurred while uploading the file </div>');
 
}
if($myFile['size'] > 500000){
 
   die('<div class="alert alert-danger" role="alert"> File is too big </div>');
 
}

$image = $_FILES["image"]["name"]; 
$img = "images/".$image;
echo'<img src="'.$img.'">';
}
?>