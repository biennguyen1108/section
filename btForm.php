<?php 
if(isset($_POST["submit"])){
    if(!empty($_POST["name"])){
    setcookie("name",$_POST["name"],time() +1000);
    setcookie("email",$_POST["email"],time() +1000);
    setcookie("username",$_POST["username"],time() +1000);
    setcookie("password",$_POST["password"],time() +1000);
        }
    echo "<script> alert('You have submit!!')</script>";
}
?>

<html> 
    <link rel="stylesheet" href="style.css">
<body> 
    <center> 
<form method="post" class="frm" > 
<h1 class="title">LOGIN INFORMATION</h1> 
<label for="name">Name: </label>
<input type="text" name="name" id="name" >
<br> <br>                        
<label for="email">Email: </label>
<input type="text" name="email" id="email">
<br> <br>       
<lable for="loginname">User name:</label>
<input type="text" name="username" id="loginname">
<br> <br> 
<label for="password">Password: </label>
<input type="password" name="password" id="password" >
<br> <br>
<input type="submit" name="submit" id="submit" value="Login">
</form>
<div class="show"
    <p>Hello <?php echo $_COOKIE["name"];?></p>
    <p>Email: <?php echo $_COOKIE["email"];?> </p>
    <p>Login name:<?php echo $_COOKIE["username"];?></p>
    <p>Password: <?php echo $_COOKIE["password"];?></p>
    <br>
    <p><button><a href="read.php">Click</a></button></p>
</div>
</center>
</body> 
</html>