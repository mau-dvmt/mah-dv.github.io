<?php
$db = mysqli_connect("localhost", "Ditt användarid", "Ditt lösenord", "Ditt användarid");

$return = new ArrayObject();

if(isset($_FILES['media']['tmp_name'])){
	$path = $_POST['type']."/";

	if(move_uploaded_file($_FILES['media']['tmp_name'], $path.$_FILES['media']['name'])){
		if(mysqli_query($db, "INSERT INTO media (title, type, path) VALUES ('".$_POST['title']."', '".$_POST['type']."', '".$path.$_FILES['media']['name']."')")){
			$return['success'] = true;
			$return['message'] = "Fil uppladdad & sparad i db";
			echo json_encode($return);
		}else{
			$return['success'] = false;
			$return['message'] = "Fil uppladdad men inte sparad i db";
			echo json_encode($return);
		}

	}else{
		$return['success'] = false;
		$return['message'] = "Kunde inte ladda upp filen";
		echo json_encode($return);
	}
}

if(isset($_GET['action']) and $_GET['action'] == "getMedia"){
	if(isset($_GET['type'])){
		$res = mysqli_query($db, "SELECT * FROM media WHERE type = '".$_GET['type']."' ORDER BY id DESC");
	}else{
		$res = mysqli_query($db, "SELECT * FROM media ORDER BY id DESC");
	}
	$media = new ArrayObject();
	while($row = mysqli_fetch_assoc($res)){
		$m = new ArrayObject();
		$m['path'] = $row['path'];
		$m['type'] = $row['type'];
		$m['title'] = $row['title'];
		$m['timestamp'] = $row['timestamp'];
		$m['id'] = $row['id'];
		$media['files'][] = $m;
	}
	echo json_encode($media);
}


?>
