<!DOCTYPE html>
<html>

<head>
<link rel="shortcut icon" type="image/x-icon" href="css/images/login.ico" />
<script src="js/jquery-1.8.0.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/signin.js"></script>
<script type="text/javascript" src="js/script.js"></script>
  <meta charset="UTF-8">

  <title>Stargame Login</title>

    <link rel="stylesheet" href="css/loginstyle.css" media="screen" type="text/css" />

</head>

<body>

  <html lang="en-US">
<head>

	<meta charset="utf-8">

	<title>Login</title>

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Varela+Round">
	

	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>

<body>

	<div id="login">

		<h2><span class="fontawesome-lock"></span>Login</h2>

		<form>

			<fieldset>

				<p><label for="email">Username</label></p>
				<p><input type="text" name = "txtEmail" value="" onBlur="if(this.value=='')this.value='mail@address.com'" onFocus="if(this.value=='mail@address.com')this.value=''"></p> <!-- JS because of IE support; better: placeholder="mail@address.com" -->

				<p><label for="password">Password</label></p>
				<p><input type="password" name = "txtPass" id="password" value="password" onBlur="if(this.value=='')this.value='password'" onFocus="if(this.value=='password')this.value=''"></p> <!-- JS because of IE support; better: placeholder="password" -->
				<p>&nbsp;<span id="status"></span></p>
				<p><input type="submit" name = "submit" value="Login"></p>

			</fieldset>

		</form>

	</div> 
	
	<!-- end login -->

</body>	
</html>

</body>

</html>