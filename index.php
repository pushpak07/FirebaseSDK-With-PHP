<?php
// Required if your environment does not handle autoloading
require 'vendor/autoload.php';

// Use the REST API Client to make requests to the Firebase API
use Kreait\Firebase\Configuration;
use Kreait\Firebase\Firebase;
use Kreait\Firebase\Query;

$users = array();
$config = new Configuration();

/* 
* Configure firebase project with database.
* https://project-id.firebaseio.com => Database URL
* Database URL can be found at firebase console.
*/
$firebase = new Firebase('https://project-id.firebaseio.com', $config);

//Get data from users database table
$users = $firebase->get('users');

//Display users table data
if(!empty($users)){
	foreach($users as $user){
		echo "Firstname : ". $user->firstname;
		echo "<Br>";
		echo "Lastname : ". $user->lastname;
		echo "<Br>";
		echo "<Br>";
	}
}