<?php
require_once('config.php');
?>
<?php
if(isset($_POST)){
	$fullname 		= $_POST['user_nm'];
	$email 			= $_POST['user_email'];
	$phonenumber	= $_POST['user_mobno'];
	$password 		= sha1($_POST['user_password']);
		
		$sql = "INSERT INTO user (user_nm, user_email,user_mobno, user_password ) VALUES(?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$fullname, $email, $phonenumber,$password]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}
?>