<?php 
if(!session_id()) {
	session_start();	
}

require_once ('../index.php');

$url = url('');
$url = str_replace('home/index.php', '', $url);

$postLogin = $url . 'student/PostLogin';
$postLoginPersonnel = $url . '/personnel/PostLogin';
?>