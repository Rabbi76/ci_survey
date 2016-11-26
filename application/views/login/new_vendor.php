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
        <h2 class="form-signin-heading">Give your information</h2>
        <label for="inputUser" class="sr-only">User Name</label>
        <input name="name" type="text" id="inpUser" class="form-control" placeholder="Full Name" required autofocus>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input style="margin: 10px 0px;" name="email" type="email" id="inputEmail" class="form-control" placeholder="Email" required>
		<label for="inputCom" class="sr-only">Company</label>
        <input style="margin: 10px 0px;" name="company" type="text" id="inputCom" class="form-control" placeholder="Company" required>
		Problem is :<br>
		
        
            <input style="margin: 5px 8px;"  type="radio" name="login_type" value="Request for Vendor id" required>Request for Vendor id
		<br>
            <input style="margin: 5px 8px;"  type="radio" name="login_type" value="Else" required>Else
		
		<label for="text" class="sr-only">description</label>
        <textarea style="margin-top: 10px;" cols="40" rows="5" name="description" class="form-control" placeholder="Dscription( problem/ details information)" required></textarea>
		      
      
        <button style="margin: 10px 0px;" name="submit" class="btn btn-lg btn-primary btn-block" type="submit" >Submit</button>
		<br>
		<hr class="style-five">
		<br>
		Already have an account?<a href="<?php echo $baseUrl.'login';?>" style="margin: 15px;" >Sign in </a>
    </form>
	</div>

</div> <!-- /container -->
</body>
</html>