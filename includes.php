<?php
	ini_set('max_execution_time', 300);

	require_once('libs/Facebook/GraphObject.php');
	require_once('libs/Facebook/GraphSessionInfo.php');
	require_once('libs/Facebook/Entities/AccessToken.php');
	require_once('libs/Facebook/HttpClients/FacebookHttpable.php');
	require_once('libs/Facebook/HttpClients/FacebookCurl.php');
	require_once('libs/Facebook/HttpClients/FacebookCurlHttpClient.php');
	require_once('libs/Facebook/FacebookSession.php' );
	require_once('libs/Facebook/FacebookRedirectLoginHelper.php' );
	require_once('libs/Facebook/FacebookRequest.php' );
	require_once('libs/Facebook/FacebookResponse.php' );
	require_once('libs/Facebook/FacebookAuthorizationException.php' );
	require_once('libs/Facebook/FacebookSDKException.php' );
	require_once('libs/Facebook/FacebookRequestException.php' );

	
	$fb_app_id = '317396045294593'; 
	$fb_secret_id = '5743b0336859d40f7bf7c4625762ad42'; 

	$fb_login_url = 'http://www.vocabaugmentor.com/rtcamp/final1/index.php'; 
	$fb_logout_url = '';
	session_start();

?>
