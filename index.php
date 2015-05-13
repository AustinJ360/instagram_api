<?php
	//Configuration for our PHP Server.
	set_time_limit(0);
	ini_set('default_socket_timeout', 300);
	session_start();
	//Make Constants using define.
	define('clientID', 'c73d173254d844b89d8117954f97d9ee');
	define('clientSecret', '971766cd8c4f4af7b7a6ff36f32b68b0');
	define('redirectURI', 'http://localhost/appacademyapi/index.php');
	define('ImageDirectory', 'pics/');
	
	if isset(($_GET['code'])) {
		$code = ($_GET['code']);
		$url = 'https://api.instagram.com/oauth/access_token';
		$access_token_settings = array('client_id' => clientID, 
										'client_secret' => clientSecret,
										'grant_type' => 'authorize_code',
										'redirect_uri' => redirectURI,
										'code' => $code
										);
	}
	
	
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
<!-- create a login for people to go on Instagram API. -->
<!-- creating a link to instagram through oauth/authorizing the account. -->
<!-- after setting client_id to blank in the beginning , along with redirect_uri then you have to echo it out from the constants. -->
	<a href="https:api.instagram.com/oauth/authorize/?client_id=<?php echo clientID; ?>&redirect_uri=<?php echo redirectURI; ?>&response_type=code">LOGIN</a>
	<script type="js/main.js"></script>
</body>
</html>
<!--
CLIENT INFO
CLIENT ID	    c73d173254d844b89d8117954f97d9ee
CLIENT SECRET	971766cd8c4f4af7b7a6ff36f32b68b0
WEBSITE URL	    http://localhost/appacademyapi/index.php
REDIRECT URI	http://localhost/appacademyapi/index.php 
-->