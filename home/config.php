<?php 
if(!session_id()) {
	session_start();	
} 
 
$postLogin = 'http://localhost/project/smc_attendance_system/student/PostLogin'; 
$postLoginPersonnel = 'http://localhost/project/smc_attendance_system/personnel/PostLogin';
?>