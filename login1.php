
<?php

	$conn=mysql_connect("localhost","root","");
	
	$db=mysql_select_db('vihaan',$conn);


	if(isset($_POST["admlogin"]))
	{
     $adminname=$_POST['username']; 
	 $adminpass=$_POST['pass'];
$query="select * from signup where u_name='$adminname' AND u_pass='$adminpass'";

$run=mysql_query($query);

if(mysql_num_rows($run)>0)
{
	echo 
	"<script font size='20'>
		window.open('donate/donate.html?logged=logged in successfully','_self')
		</script>";
}
		else 
		{	
		echo "<script>
		alert('Oops ! incorrect id or password')
		</script>";	
		}
}

?>

<html>
<head>
<title>JQuery Cycle Plugin - Basic Demo</title>
<!-- include jQuery library -->
<script type="text/javascript" src="jquery-1.8.0.min.js"></script>
<!-- include Cycle plugin -->
<script type="text/javascript" src="jquery.cycle.all.js"></script>
<script type="text/javascript">

$(document).ready(function() {
    $('.slideshow').cycle({
		fx: 'scrollLeft' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
	});
});
</script>
<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
   <div class="websitename">Disaster<b>Proofs</b></div>
	<div class="slideshow">
		<img src="img1.jpg" width="1080" height="400" />
		<img src="img2.jpg" width="1080" height="400" />
		<img src="img3.jpg" width="1080" height="400" />
		<img src="img4.jpg" width="1080" height="400" />
		
	</div>
 </br></br>
	<div class="container">
 		    <div class="div3">
          <form method="POST">
            	<table>
                	  <tr>
                    	<th width="218" height="30"><h2>LOGIN  </h2></th>
                    </tr>
                    <tr>
                    	<td>Username </td>
                    </tr>
                    <tr>
                    	<td> <input type="text" name="username"size="40" required></td>
                    </tr>
                    <tr>
                    	<td>Password </td>
                    </tr>
                    <tr>
                    	<td> <input type="password" name="pass" size="40" required> </td>
                    </tr>
                    <tr>
                    	<td></td>
                    </tr>
                    <tr>
                    	<td><input type="submit" value="Login" name="admlogin" class="but"></td>
                    </tr>
              </table>
           </form>
            <h4>New here? <a href="signup2.php"><b>Sign Up</b></a></h4>
           
       </div>
 </div>     

</div>
<div class"tag">
  <pre>
<em>Charity sees the need...
not the cause !


</em></pre></div>
<div class="final">
  
  <ul>
    <li class="fir"><a href="#">Contact us</a></li>
    <li class="fir"><a href="#">FAQ's</a></li>
    <li class="la"><a href="#">About us</a></li>
  </ul>
</div>


                  
</body>
</html>
