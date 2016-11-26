<!Doctype html>
<html>
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
    <?php
        if(isset($register)){
            var_dump($register);
        }
    ?>
    <form class="form-signin" method="post" action="">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input name="email" type="text" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input name="pass" type="password" id="inputPassword" class="form-control" placeholder="Password" required>

        <button name="submit" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
		<a href="<?php echo $baseUrl.'User_login/logout';?>" class="btn btn-lg btn-info btn-block">Back</a>
		
        <a href="<?php echo $baseUrl.'User_login/register';?>" class="btn btn-lg btn-info btn-block">Register</a>
		
    </form>

</div> <!-- /container -->
</body>
</html>