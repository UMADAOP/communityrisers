<?php
 
//DB details
 
$dbHost = 'localhost';
 
$dbUsername = 'wvfdavanhx';
 
$dbPassword = '';
 
$dbName = 'wvfdavanhx';
 
//Create connection and select DB
 
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
 
if($db->connect_error){
 
   die("Unable to connect database: " . $db->connect_error);
 
}