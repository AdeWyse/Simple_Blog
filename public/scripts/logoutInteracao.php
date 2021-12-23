<?php
	session_start();
	$_SESSION['user'] = '';
	header("Location: http://localhost:8000/blog-home?id=0");
?>
