<?php include 'functions.php'; ?>
<?php include 'database.php'; ?>
<?php

	session_start();
	
	unset($_SESSION['is_logged_in']);
    unset($_SESSION['user_id']);
    unset($_SESSION['username']);
    unset($_SESSION['name']);
    unset($_SESSION['login_type']);

    redirect('index.php', 'شما از حساب کاربری خارج شدید!', 'success');
?>	