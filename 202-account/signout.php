<?php
$current_dir =  str_replace($_SERVER['DOCUMENT_ROOT'], '', __DIR__ );

include_once(substr(dirname( __FILE__ ), 0,-strlen($current_dir) ) . '/202-config/connect.php');

if ($_SESSION['toolbar'] == 'true')
	$redir_url = get_absolute_url().'202-Mobile/';
else
	$redir_url = get_absolute_url();
session_destroy();
setcookie(
	'remember_me',
	'',
	time() - 3600,
	'/',
	$_SERVER['HTTP_HOST'],
	false,
	true
);
header('location: '.$redir_url);