<?php
$url='127.0.0.1:3306';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"brain master");
if(!$conn){
die('Could not Connect My Sql:' .mysql_error());
}
?> 