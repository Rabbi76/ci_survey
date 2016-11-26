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

    <form class="form-signin" method="post" action="">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputUsername" class="sr-only">Username</label>
        <input name="username" type="text" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input name="pass" type="password" id="inputPassword" class="form-control" placeholder="Password" required>

        <button name="submit" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
		<a href="<?php echo $baseUrl.'User_login/logout';?>" class="btn btn-lg btn-info btn-block">Back</a>
    </form>

</div> <!-- /container -->
</body>
</html>