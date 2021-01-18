<?php 

	include("connection.php");

	if ($_GET['action'] == "check_login") {
		$sql = "SELECT * FROM user WHERE user_email = '".$_POST['user_email']."' AND user_password = '".$_POST['user_password']."'";
        $result = $conn->query($sql);
		if (mysqli_num_rows($result) > 0) {
			echo "success";
		}else{
			echo "failed";
		}
	}elseif ($_GET['action'] == "register") {
		$user_email = $_POST['user_email'];
		$user_jenis_kelamin = $_POST['user_jenis_kelamin'];
		$user_alamat = $_POST['user_alamat'];
		$user_nama = $_POST['user_nama'];
		$user_password = $_POST['user_password'];

		$sql = "INSERT INTO user VALUES (null, '$user_nama', '$user_jenis_kelamin', '$user_alamat', '$user_email', '$user_password' )";
	    $result = $conn->query($sql);

		if ($result) {
	    	echo 'success';
	    }else{
	    	echo 'failed';
	    }
	}

 ?>