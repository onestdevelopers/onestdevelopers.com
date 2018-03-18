<?php 
session_start();
include 'connection.php';
		 $error="";
	 if ((isset($_SESSION['username']) && $_SESSION['username'] != '')) {
		// header('Location:http://localhost:1234/admin/home.php');
	 }
	 else{
		 if(isset($_POST["username"])&& isset($_POST["password"] ))
		 {
			 $query = "Select * from user";
			 $query1 = "Select * from usertype";
					if($result = mysqli_query($link,$query)){
						while ($row = mysqli_fetch_array($result)) {
							if($row[1]==$_POST["username"])
							{
								if($row[2]==$_POST["password"]){
									$_SESSION['username']=$row[1];
									$_SESSION['ac']=$row[3];
									$_SESSION['id']=$row[0];
									header('Location:http://localhost:1234/admin/companytrial.php');
								}
								else{
									$error="Username and Password doesn't match";
								}
								
							}
							else{
									$error="Username doesn't exist";
							}
						}
					}
		 }
		 
	 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Log In &middot; Elephant Template &middot; The fastest way to build modern admin site for any platform, browser, or device</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <meta name="description" content="Elephant is a front-end template created to help you build modern web applications, fast and in a professional manner.">
    <meta property="og:url" content="http://demo.naksoid.com/elephant">
    <meta property="og:type" content="website">
    <meta property="og:title" content="The fastest way to build modern admin site for any platform, browser, or device">
    <meta property="og:description" content="Elephant is a front-end template created to help you build modern web applications, fast and in a professional manner.">
    <meta property="og:image" content="../img/ae165ef33d137d3f18b7707466aa774d.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@naksoid">
    <meta name="twitter:creator" content="@naksoid">
    <meta name="twitter:title" content="The fastest way to build modern admin site for any platform, browser, or device">
    <meta name="twitter:description" content="Elephant is a front-end template created to help you build modern web applications, fast and in a professional manner.">
    <meta name="twitter:image" content="../img/ae165ef33d137d3f18b7707466aa774d.jpg">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="manifest.json">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#d9230f">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
    <link rel="stylesheet" href="css/vendor.min.css">
    <link rel="stylesheet" href="css/elephant.min.css">
    <link rel="stylesheet" href="css/login-1.min.css">
  </head>
  <body>
    <div class="login">
      <div class="login-body">
        <a class="login-brand" href="index-2.html">
          <img class="img-responsive" src="img/logo.svg" alt="Elephant">
        </a>
        <h3 class="login-heading">Sign in</h3>
        <div class="login-form">
			<?php echo $error; ?>
          <form data-toggle="validator" method="post" action=<?php echo $_SERVER['PHP_SELF'] ?>>
            <div class="form-group">
              <label for="username" class="control-label">Username</label>
              <input id="username" class="form-control" type="text" name="username" spellcheck="false" autocomplete="off" data-msg-required="Please enter your username." required>
            </div>
            <div class="form-group">
              <label for="password" class="control-label">Password</label>
              <input id="password" class="form-control" type="password" name="password" minlength="6" data-msg-minlength="Password must be 6 characters or more." data-msg-required="Please enter your password." required>
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-block" type="submit">Sign in</button>
            </div>
            <div class="form-group">
              <ul class="list-inline">
                <li>
                  <label class="custom-control custom-control-primary custom-checkbox">
                    <input class="custom-control-input" type="checkbox">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-label">Keep me signed in</span>
                  </label>
                </li>
              </ul>
              <ul class="list-inline">
                <li><a href="password-1.html">Forgot username?</a></li>
                <li>
                  <span aria-hidden="true"> · </span>
                </li>
                <li><a href="password-1.html">Forgot password?</a></li>
              </ul>
            </div>
          </form>
        </div>
      </div>
      <div class="login-footer">
        <ul class="list-inline">
          <li><a class="link-muted" href="signup-1.html">Sign up</a></li>
          <li>|</li>
          <li><a class="link-muted" href="#">Privacy Policy</a></li>
          <li>|</li>
          <li><a class="link-muted" href="#">Terms</a></li>
          <li>|</li>
          <li><a class="link-muted" href="#">Cookie Policy</a></li>
          <li>|</li>
          <li>© Elephant 2016</li>
        </ul>
      </div>
    </div>
    <script src="js/vendor.min.js"></script>
    <script src="js/elephant.min.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-83990101-1', 'auto');
      ga('send', 'pageview');
    </script>
  </body>
</html>