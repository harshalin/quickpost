<?php
$msg='';
if(isset($_POST['login']))
{
$email=$_POST['email'];
$password=$_POST['password'];
$new_dir=$email."_".$password;
if(is_dir($new_dir))
{
 header("Location: welcome.php");
}
else
 { 
 	$msg="wrong email & pass";
 }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>log in form</title>
	<meta charset="utf-8">
    <link rel="stylesheet"  href="style1.css">
</head>

<body>
 	 <h3><?php echo $msg; ?></h3>
       <div class="container">
       	<h2>LOG IN HERE</h2>
        <form class="login-form" method="POST" action="">
       	<input type="text" name="email" placeholder="email"></br>
      	<input type="password" name="password" placeholder="password"></br>
      	<button type="btn" name="submit">LOG IN</button></br>
      </form>
      	
 </div>
</body>
</html>