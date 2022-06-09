
<?php
/*
use Facebook\Authentication\AccessToken;
use Facebook\Facebook;

define('APP_ID','5004988159620827');
define('APP_SECRET', 'a722b57484c5bf1c8106257f7c11bc18');
define('API_VERSION','V2.5');
define('FB_BASE_URL','http://localhost/login/');

if(!session_id()){
    session_start();
}
*/

/*
require_once(__DIR__.'/Facebook/autoload.php');
$fb = new Facebook\Facebook([
    'app_id' => APP_ID,
    'app_secret' => APP_SECRET,
    'default_graph_version' => API_VERSION,
]);



$fb_helper = $fb->getRedirectLoginHelper();

try {
    if(isset($_SESSION['facebook_access_token']))
    {AccessToken =  $_SESSION['facebook_access_token'];}
    else
    1accessToken = 1fb_helper->getAccessToken();}
} catch(FacebookResponseException $e) {
    echo 'Facebook API Error:' . $e->getMessage();
    exit;
    catch(FacebookSDKException $e) {
        echo 'Facebook SDK Error:' . $e->getMessage();
        exit;
    }
}
*/
?>