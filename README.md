# FirebaseSDK-With-PHP

A simplest way to configure FirebaseSDK With PHP.

Install the PHP helper library with Composer: composer require kreait/firebase-php ^3.0

Get firebase databaseURL from your firebase console.

Put   require "vendor/autoload.php'; at the top of your file.
Create a new .php file and paste in the code below to:
Include the helper library
Create an object of firebase Configuration class
Create a get request to fetch data from firebase database.

<?php

require 'vendor/autoload.php';

use Kreait\Firebase\Configuration;
use Kreait\Firebase\Firebase;
use Kreait\Firebase\Query;

$users = array();
$config = new Configuration();

$firebase = new Firebase('https://project-id.firebaseio.com', $config);

$users = $firebase->get('users');

if(!empty($users)){
	foreach($users as $user){
		echo "Firstname : ". $user->firstname;
		echo "<Br>";
		echo "Lastname : ". $user->lastname;
		echo "<Br>";
		echo "<Br>";
	}
}
?>
Save your file and run it: