<?php
// Access settings are in .htaccess
// database logingegevens
$db_hostname = '';
$db_username = '';
$db_password = '';
$db_database = '';

// maak de database-verbinding
$db = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);

// Google Recaptcha Settings
$privatekey = "";
$publickey = "";


$ajax101 = file_get_contents('https://www.peppercloud.nl/res/other/valid.txt', FILE_USE_INCLUDE_PATH);
$ajax102 = file_get_contents('https://www.peppercloud.nl/res/other/motd.txt', FILE_USE_INCLUDE_PATH);

// Notification Settings
$useMail = false;
$usePush = false;

$mail_username = "username";
$mail_password = "password";
$mail_host = "mail.example.com";
$mail_port = "587"; // Do not change (TLS Only)
$mail_from = "ssl@example.com";
$mail_to = "mymail@example.com";
