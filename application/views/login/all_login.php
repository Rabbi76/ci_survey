<!Doctype html>
<html>
<style>
div.style-seven {
    border: 0;
    height: 1px;
    background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
}
</style>
<head>
<!-- <a href="<?php echo $baseUrl.'User_login/logout';?>" style="margin-left: 20px;">Home</a> -->
    <title>Share & Care</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/javascript" src="<?php echo $baseUrl; ?>js/jquery.js"></script>
    <script type="application/javascript" src="<?php echo $baseUrl.'js/bootstrap.min.js'; ?>"></script>


    <link rel="stylesheet" href="<?php echo $baseUrl.'css/bootstrap.min.css'; ?>" >
    <link href="<?php echo $baseUrl.'css/signin.css';?>" rel="stylesheet">
</head>
<body>
		
		
<div class="container">
    <?php
        if(isset($register)){
            var_dump($register);
        }
    ?>
	<h1 class="text-muted" style="text-align: center; "><a href="<?php echo $baseUrl.'User_login/logout';?>">Share & Care</a></h1>
	<div  class="form-signin" style="max-width: 400px; border:1px solid black; padding:3px 5px; height:70%">
    <form class="form-signin" method="post" action="">
	
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
		
        <input name="email" type="text" id="inputEmail" class="form-control" placeholder="Login Credential" required autofocus>
		
        <label for="inputPassword" class="sr-only" >Password</label>
		
        <input style="margin-top: 5px;" name="pass" type="password" id="inputPassword" class="form-control" placeholder="Password" required>

        <label class="radio-inline">
            <input type="radio" name="login_type" value="user" required>User
        </label>
        <label class="radio-inline">
            <input type="radio" name="login_type" value="vendor" required>Vendor
        </label>
        <label class="radio-inline">
            <input type="radio" name="login_type" value="admin" required>Admin
        </label><br>

        <button style="margin-top: 10px" name="submit" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
		<a href="<?php echo $baseUrl.'User_login/forget_pass';?>" >Forget password</a>
		<br><br><br><br><br>
		
		
		<div class="style-seven" style="width: 100%; height: 20px;  text-align: center">
		  <span  style="font-size: 15px; background-color: #F3F5F6; padding: 5px 10px;">
			New to Share & Care? <!--Padding is optional-->
		  </span>
		</div>
		<br>
		<a href="<?php echo $baseUrl.'User_login/register';?>" class="btn btn-lg btn-info btn-block" style="height:70%"> New User</a>
		<a href="<?php echo $baseUrl.'newVendor/vendor_register';?>" class="btn btn-lg btn-info btn-block"> New Vendor</a>
		
	
    </form>
	</div>	

</div> <!-- /container -->
</body>
</html>