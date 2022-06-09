<?php
$host     = 'localhost';
$user     = 'root'; // diisi dengan user database kalian biasanya
                    // defaultnya bernama root jika kita belum 
                    // merubahnya
$password = '';  //diisi dengan password database kalian biasanya
                 // defaultnya kosong
$db       = 'login'; //diisi dengan nama database kalian
$con = mysqli_connect($host, $user, $password, $db) or die(mysqli_error());


define('FB_APP_ID','5004988159620827');
define('FB_APP_SECRET','a722b57484c5bf1c8106257f7c11bc18');
define('FB_REDIRECT_URI','http://localhost/login/login.php');

?>