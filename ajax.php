<?php
 
//DB details
 
$db = new POD("mysql:host=localhost;dbname=wvfdavanhx","wvfdavanhx","");
//$db = new mysqli("localhost", "wvfdavanhx", "", "wvfdavanhx");

function add_file() {
	GLOBAL $db;
	if(isset($_FILES['file']['name']) && isset($_GET['my_form']) &&
	 $_GET['my_form'] == 'ajax_form'){
		$img_name      = $_FILES['file']['name'];
		$temp_name     = $_FILES['file']['temp_name'];
		$img_text      = mysql_real_escape_string($db, $_POST['image_text']);
		$store         = 'images/';
		$extension     = array('jpg','jpeg','png');
		$get_extension = explode(".", $img_name);
		$end           = end($get_extension);
		if(!in_array($end, $extension)){
			echo "<div class='error'>Invalid image extension. We cannot process ".$end." files. </di>";
		}else{
			move_uploaded_file($tmp_name, "$store/$img_name");
			$Query = $db->prepare("INSERT INTO file(file_name, file_text) VALUES (?)");
			$Query->execute(array($img_name, $img_text));
			if($Query){
				echo "Thank you for sharing the love!";
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
			echo "<div class='error'>Sorry, we don't have any posts yet!</div>"
				;
		}else{
		while($r = $Query->fetch(POD::FETCH_OBJ));
		echo "<div><img src='images/$r->file_name' class='img-res'><p>"$r->file_text"</p></div>";
		/* echo "<p>"$r->file_text"</p>" */
		endwhile;
		}
	}
}
show_images();
 
?>