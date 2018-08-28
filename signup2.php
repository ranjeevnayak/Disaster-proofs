<?php
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db('vihaan',$conn);
if(isset($_POST['submit']))
{
	// we can check by using echo before
	// veriable wether it print or not
	  $Name=$_POST['username'];
	  $Email=$_POST['email'];
	  $Password=$_POST['password'];
	  $Repassword=$_POST['password2'];
	
	
	if($Name=='')
	{echo
		"<script>
		window.open('signup2.php?nname=first Name is required','_self')
		</script>";
		exit();
		
	}
	
	if($Email=='')
	{
		echo
		"<script>
		window.open('signup2.php?eemail=last name is required','_self')
		</script>";
		exit();
	}
	
	if($Password=='')
	{
		echo 
		"<script>
		window.open('signup2.php?ppassword=password is required','_self')
		</script>";
		exit();
	}
	
	if($Repassword=='')
	{
		echo 
		"<script>
		window.open('signup2.php?reepassword=repassword no is required','_self')
		</script>";
		exit();
	}
	
$query="insert into signup(u_name,u_email,u_pass,u_repass) values 
('$Name','$Email','$Password','$Repassword')";

if(mysql_query($query)) //query will execute
{	
	echo "</h1> REGISTER SUCESSFULLY </h2> ";
}	
	
}
	 
	
	

	
?>

<html >
<head>
  <meta charset="UTF-8">
  <title>Material design sign up form</title>
  
  
  
      <link rel="stylesheet" href="style.css">

  
</head>

<body>
  <div id="login-box">
  <div class="left">
    <h1>Sign up</h1>
	<form method="post" action="signup2.php">
	
    <input type="text" name="username" placeholder="Username" />
	<?php echo @$_GET['nname']; ?>
    <input type="text" name="email" placeholder="E-mail" />
	<?php echo @$_GET['eemail']; ?>
    <input type="password" name="password" placeholder="Password" />
	<?php echo @$_GET['ppassword']; ?>
    <input type="password" name="password2" placeholder="Retype password" />
	<?php echo @$_GET['reepassword']; ?>
	
    <input type="submit" name="submit"  value="SAVE" />	
	</form> 
	<a href="prac.html"><button type="submit">click me</button></a>
  </div>
 
  
  <div class="right">
    <p><em>It's time to change the mind-set that natural disasters are inevitable</em></p>
  </div>
  <div class="or"></div>
</div>
  
  
</body>
</html>
