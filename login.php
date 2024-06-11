<?php
$email = $_POST["email"];
$password = $_POST["password"];
$role= $_POST["role"];
session_start();
if(!preg_match("/^[a-z\d\.\+_\'%-]+@([a-z\d-]+\.)+[a-z]{2,6}$/i",$email) and strlen($password)==6)
	die("the user name or password is incorrect");
if($role=="Admin")
{
if($email!="admin@gmail.com")
	die("the user name is incorrect");
if($password!="123456")
	die("the password is incorrect");	

header('Location: admin.html');
exit;	
}	
else
{
if($email!="participant@gmail.com")
	die("the user name is incorrect");
if($password!="123456")
	die("the password is incorrect");	
header('Location: participant.html');
exit;	
}	
session_destroy();	
header("Location: login.html");
exit();

/*
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $role = $_POST["role"];

    // Validate email
    if (!preg_match("/^[a-z\d\.\+_\'%-]+@([a-z\d-]+\.)+[a-z]{2,6}$/i", $email)) {
        die("The username or password is incorrect");
    }

    // Validate password length
    if (strlen($password) != 6) {
        die("The username or password is incorrect");
    }

    // Role-based validation
    if ($role == "Admin") {
        if ($email != "admin@gmail.com" || $password != "123456") {
            die("The username or password is incorrect");
        }
        header('Location: admin.html');
        exit;
    } else {
        if ($email != "participant@gmail.com" || $password != "123456") {
            die("The username or password is incorrect");
        }
        header('Location: participant.html');
        exit;
    }
}

session_destroy();
header("Location: login.html");
exit();
?>
*/


