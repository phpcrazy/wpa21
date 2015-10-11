<?php 

define("DD", realpath(__DIR__ . "/.."));

require DD . "/vendor/autoload.php";


DB::table("users")->testDb();

die();
$users = DB::table("users")->get();

foreach($users as $user) {
    print "Name " . $user['name'] . "<br />";
}

$another_users = DB::table("users")->where("id", 1)->get();

foreach($another_users as $user) {
    print "Address : " . $user['address'] . "<br />";
}

$other_users = DB::table("users")->where("name", "Aung Aung")->get();

foreach($other_users as $user) {
    print "Name : " . $user['name'] . "<br />";
}






