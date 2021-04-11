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
							<p><span>Sign In to</span> <a href="index.html">Travelo</a></p>
						</div>
						<div class="signin">
							<div class="signin-rit">
								<span class="checkbox1">
									 <label class="checkbox"><input type="checkbox" name="checkbox" checked="">Forgot Password ?</label>
								</span>
								<p><a href="#">Click Here</a> </p>
								<div class="clearfix"> </div>
							</div>
							<form method="post" action="index.php?controller=login&action=loginPost&key=<?php echo $key ?>&key2=<?php echo $key2 ?>&key3=<?php echo $key3 ?>">				
							<div class="log-input" style="margin-bottom: 0px;">
								<div class="log-input-left">
								   <input type="text" name="email" required class="user" value="Yourname" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email address:';}" style="margin-bottom: 0px;" />
								</div>
								
								<div class="clearfix"> </div>

							</div>
							<div>
								 <?php if($message == "emailNotExists"): ?>
								 	<div style="color: red;">Email không tồn tại!</div>
								<?php endif; ?>
							</div>
							<div class="log-input">
								<div class="log-input-left">
								   <input type="password" name="password" required class="lock" value="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email address:';}" style="margin-bottom: 0px; margin-top: 23px;"/>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div>
								 <?php if($message == "passwordNotExists"): ?>
								 	<div style="color: red;">Sai password</div>
								<?php endif; ?>
							</div>
							<input type="submit" value="Login" class="btn btn-primary"style="margin-top: 23px;">
						</form>	 
						</div>
						<div class="new_people">
							<h4>For New People</h4>
							<p>Having hands on experience in creating innovative designs,I do offer design 
								solutions which harness.</p>
							<a href="index.php?controller=login&action=register">Register Now!</a>
						</div>
					</div>
				</div>
			</div>
	</section>
</body>
</html>