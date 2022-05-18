<?php 
include './login.php';
session_start();

if(isset($_COOKIE["name"])){
    echo "your name is:".$_COOKIE["name"].".<br>";
}else{
    echo "not regenisation";
}
echo "time is:".$reletime;
 
if(isset($_SESSION['page_count']))
	$_SESSION['page_count'] += 1;

else
	$_SESSION['page_count']=1;
	
echo "views = ".$_SESSION['page_count']."<br>";
// $_SESSION['visit'] += 1; //set session variable

// //Check if session is set
// if(isset($_SESSION['visit'])){
// echo "You visited this page ".$_SESSION['visit']. " times";
// }
?>
