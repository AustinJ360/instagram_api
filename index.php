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
	
	if (isset($_GET['code'])){
		$code = ($_GET['code']);
		$url = 'https://api.instagram.com/oauth/access_token';
		$access_token_settings = array('client_id' => clientID, 
									   'client_secret' => clientSecret,
									   'grant_type' => 'authorization_code',
									   'redirect_uri' => redirectURI,
									   'code' => $code
										);
		//cURL is what we use in PHP, it's a library calls to other API's
		$curl = curl_init($url);//setting a cURL session and we put in $url because that's where we are getting the data from.
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $access_token_settings);//settings the POSTFIELDS to array setup that we created.
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);//setting it equal to 1 because we are getting strings back.
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);//but in live work-production we want to set this to true.
}
$result = curl_exec($curl);
curl_close();	
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