<!Doctype html>
<html>
<style>

hr.style-five {
     border: 0;
    height: 1px;
    background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
}
</style>
<head>
    <title>Share & Care</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/javascript" src="<?php echo $baseUrl; ?>js/jquery.js"></script>
    <script type="application/javascript" src="<?php echo $baseUrl.'js/bootstrap.min.js'; ?>"></script>


    <link rel="stylesheet" href="<?php echo $baseUrl.'css/bootstrap.min.css'; ?>" >
    <link href="<?php echo $baseUrl.'css/signin.css';?>" rel="stylesheet">
</head>
<body>
<div class="container">
	<h1 class="text-muted" style="text-align: center;"><a href="<?php echo $baseUrl.'User_login/logout';?>">Share & Care</a></h1>
	<div  class="form-signin" style="border:1px solid black; max-width: 400px; padding:3px 5px">
    <form class="form-signin" method="post" action="">
        <?php if(isset($set) && $set==1){ ?>
            <div class="alert alert-success">
            <strong>Success!</strong> You are Registered!
            </div>
        <?php }if(isset($set) && $set==0){?>
            <div class="alert alert-danger">
                <strong>Failed!</strong> Failed to Register!
            </div>
        <?php } ?>
        <h2 class="form-signin-heading">Please Register</h2>
        <label for="inputName" class="sr-only">Name</label>
        <input style="margin-top: 10px;" name="name" type="text" id="inputName" class="form-control" placeholder="Your Name" required autofocus>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input style="margin-top: 10px;" name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input style="margin-top: 10px;" name="pass" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
		By creating an account, you agree to Share & Care's Conditions of Use and Privacy Notice.

        <button style="margin-top: 10px;" name="submit" class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
		<br>
		<hr class="style-five">
		<br>
		Already have an account?<a href="<?php echo $baseUrl.'login';?>" style="margin: 15px;" >Sign in </a>
    </form>
	</div>

</div> <!-- /container -->
</body>
</html>
