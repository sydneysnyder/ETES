<?php session_start(); ?>

<?php 
include_once("php/connect_db.php");
// if(isset($_SESSION['id']))
// {
// 	header("Location:index.php");
// }
$stmt = $database->prepare('SELECT * FROM user WHERE email=:email');
$stmt->execute(array('email' => $_POST['email']));
$user = $stmt->fetch();
// result is non-null, user is found
if($_POST['password'] == $user['password'])
{
	// Login
	$_SESSION['id'] = $user['id'];
	$_SESSION['email'] = $user['email'];
	//$_SESSION['admin'] = $user['admin'];
}
else
{
	// Some error with logging in, throw an error
	throw new Exception("Username/Password Incorrect");
}
?>