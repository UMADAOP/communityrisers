<?php
 
//DB details
 
$dbHost = '204.48.17.31:3306';
 
$dbUsername = 'wvfdavanhx';
 
$dbPassword = '';
 
$dbName = 'wvfdavanhx';
 
//Create connection and select DB
 
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
 
if($db->connect_error){
 
   die("Unable to connect database: " . $db->connect_error);
 
}