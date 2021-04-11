<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>btvn</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <!-- Bootstrap Core CSS -->
 <link rel="stylesheet" href="../assets/upload/css1/css/font-awesome.min.css">
  <script type="text/javascript" src="../assets/upload/js1/jquery-3.5.1.js"></script>
  <link rel="stylesheet" type="text/css" href="../assets/upload/css/bootstrap.min.css">
  <script type="text/javascript" src="../assets/upload/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../assets/upload/js2/script.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Custom CSS -->
<link href="../assets/upload/css2/style3.css" rel='stylesheet' type='text/css' />

</head> 
   
 <body class="sign-in-up">
 	<?php 
		$message = isset($_GET["message"]) ? $_GET["message"] : "";
	?>
    <section>
			<div id="page-wrapper" class="sign-in-wrapper">
				<div class="graphs">
					<div class="sign-in-form">
						<div class="sign-in-form-top">
							<p><span>Register to</span> <a href="index.html">Travelo</a></p>
						</div>
						<div class="signin">
							<form method="post" action="index.php?controller=login&action=registerPost">
								<div>Your name</div>
								<div class="log-input">
									<div class="log-input-left">
									   <input type="text" name="name" required class="user" value="Your name:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your name:';}"/>
									</div>
									<div class="clearfix"> </div>
								</div>
								Your email
								<div class="log-input">
									<div class="log-input-left">
									   <input type="email" name="email" required class="user" value="Your email:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your email:';}" style="margin-bottom: 0px;font-size: 0.95em;padding: 10px 15px 10px 37px;outline: none;border: 1px solid #D3D3D3;color: #A8A8A8;width: 98%;"/>
									</div>
									<div class="clearfix"> </div>
								</div>
								<?php if($message == "emailExists"): ?>
									<div style="color: red;">Email đã tồn tại!</div>
								<?php endif; ?>
								Your address
								<div class="log-input">
									<div class="log-input-left">
									   <input type="text" name="address" required class="user" value="Your address:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your address:';}" style="margin-top: 23px;"/>
									</div>
									<div class="clearfix"> </div>
								</div>
								Your phone
								<div class="log-input">
									<div class="log-input-left">
									   <input type="text" name="phone" required class="user" value="Your phone:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your phone:';}"/>
									</div>
									<div class="clearfix"> </div>
								</div>
								Password
								<div class="log-input">								
									<div class="log-input-left">
									   <input type="password" name="password" required class="lock" value="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password:';}"/>
									</div>
									<div class="clearfix"> </div>
								</div>
								<input type="submit" value="Register" class="btn btn-primary">
							</form>	 
						</div>
						<div class="new_people">
							<p>If you have a Account?</p>
							<a href="index.php?controller=login&action=login">Login Now!</a>
						</div>
					</div>
				</div>
			</div>
	</section>
</body>
</html>