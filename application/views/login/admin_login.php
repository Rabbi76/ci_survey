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
        <label for="inputEmail" class="sr-only">Email address</label>
        <input name="username" type="text" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input name="pass" type="password" id="inputPassword" class="form-control" placeholder="Password" required>

        <button name="submit" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>

</div> <!-- /container -->
</body>
</html>