
<?php
	//Configuration for our PHP Server.
	set_time_limit(0);
	ini_set('default_socket_timeout', 300);
	session_start();
	//Make Constants using define.
	define('client_id, value', 'c73d173254d844b89d8117954f97d9ee');
	define('client_secret', '971766cd8c4f4af7b7a6ff36f32b68b0');
	define('redirectURI', 'http://localhost/appacademyapi/index.php');
	define('ImageDirectory', 'pics/');
	
	
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale1.0">
	<title>Austin</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="author" href="human.txt">
</head>
<body>
	<a href="https://api.instagram/oauth/authorize/?client_id=<?php echo client_ID; ?>&redirect_url=<?php echo redirectURI?>&response_type=code">LOGIN</a>
	<script type="js/main.js"></script>
</body>
</html><!--
CLIENT INFO
CLIENT ID	    c73d173254d844b89d8117954f97d9ee
CLIENT SECRET	971766cd8c4f4af7b7a6ff36f32b68b0
WEBSITE URL	    http://localhost/appacademyapi/index.php
REDIRECT URI	http://localhost/appacademyapi/index.php 
-->