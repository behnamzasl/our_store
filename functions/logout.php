<?php 
// function logout() {
// 	if(check_login()) {
// 		$_SESSION['login'] = false;
// 	}
// 	session_unset();
// }
session_start();
session_destroy();
header('Location: ../index.php');
exit;
// }