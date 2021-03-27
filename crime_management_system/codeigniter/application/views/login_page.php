<!DOCTYPE html>
<html>
    <head>
     <title>Login Page</title>
     <style>
        form{
		border:1px solid;
		width:400px;
		height:400px;
	}
	h1{
		text-decoration:underline;
		text-align:center;
	}
	label{
		font-size:20px;
		margin-left:20px;
	}
    input{
	      padding :20px;
		  margin-left:100px;
		  
	     }
	.login{
		border:1px solid;
		width:100px;
		height:50px;
		border-radius:5px;
		text-align:center;
		margin-left:120px;
		margin-top:30px;
		font-size:20px;
	}
     </style>
    </head>
    <body>
        <form method="post" action="<?php echo base_url(); ?>First/login_check">
        <h1>Login Page</h1>
        <label>Emailid :</label>
        <input type="text" name="loginemail" placeholder="Email id"></br>
        <label>Password :</label>
        <input type="password" name="loginpwd" placeholder="Password"></br>
        <input class="login" type="submit" value="Login">
        </form>
    </body>
</html>