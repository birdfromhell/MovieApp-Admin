/*
Template Name: Veltrix - Responsive Bootstrap 4 Admin Dashboard
Author: Themesbrand
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: Session Timeout Js File
*/

$.sessionTimeout({
	keepAliveUrl: 'starter.php',
	logoutButton:'Logout',
	logoutUrl: 'login.php',
	redirUrl: 'dashboard_api\logout.php',
	warnAfter: 300000,
	redirAfter: 30000,
	countdownMessage: 'Redirecting in {timer} seconds.'
});