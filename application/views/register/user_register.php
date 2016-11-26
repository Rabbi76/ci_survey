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
        <input name="name" type="text" id="inputName" class="form-control" placeholder="Your Name" required autofocus>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input name="email" type="text" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input name="pass" type="password" id="inputPassword" class="form-control" placeholder="Password" required>

        <button name="submit" class="btn btn-lg btn-info btn-block" type="submit">Register</button>
    </form>

</div> <!-- /container -->
</body>
</html>