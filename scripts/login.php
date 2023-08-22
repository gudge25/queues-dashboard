<?php
 

session_start();

$name= $_SESSION['username'] = $_POST['login-username'];
$pass= $_SESSION['password'] = $_POST['login-password'];
 
if($name==null or $pass==null)	//if null than return to index page
{
header('Location:../base_pages_login.php');
}
else{
 
if(   $name =='admin' and $pass='admin')	//if account matches
{
$_SESSION['uid']=1;
$_SESSION['name']='admin';
$_SESSION['usertype']='1';

header('Location:../index.php');
}

else
{
$_SESSION['success'] = "false";

header('Location:../base_pages_login.php');
}



}


?>