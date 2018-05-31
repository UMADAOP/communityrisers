<?php
 
//DB details
 
$db = new POD("mysql:host=localhost;dbname=ncfvwashpx","root","");

function add_file() {
	GLOBAL $db;
	if(isset($_FILES['file']['name']) && isset($_GET['my_form']) &&
	 $_GET['my_form'] == 'ajax_form'){
		$img_name = $_FILES['file']['name'];
		$temp_name = $_FILES['file']['temp_name'];
		$img_text = mysql_real_escape_string($db, $_POST['image_text']);
		$store = 'images/';
		$extension = array('jpg','jpeg','png');
		$get_extension = explode(".", $img_name);
		$end = end($get_extension);
		if(!in_array($end, $extension)){
			echo "<div class='error'>Invalid image extension. We do not allow ".$end."</di>";
		}else{
			move_uploaded_file($tmp_name, "$store/$img_name");
			$Query = $db->prepare("INSERT INTO file(file_name, file_text) VALUES (?)");
			$Query->execute(array($img_name, $img_text));
			if($Query){
				echo "image is uploaded";
			}
		}

	 }

}
add_file();
function show_images(){
	GLOBAL $db;
	if(isset($_GET['my_form']) && $_GET['my_form'] == 'show'){
		$Query = $db->prepare("SELECT * FROM file ORDER BY id DESC");
		$Query->execute();
		if($Query->rowCount() == 0){
			echo "<div class='error'>Sorry we dont have any posts yet!</div>";
		}else{
		while($r = $Query->fetch(POD::FETCH_OBJ));
		echo "<img src='images/$r->file_name' class='img-res'>";
		echo "<p>"$r->file_text"</p>"
		endwhile;
		}
	}
}
show_images();
 
?>