
   <div class=" header-line container-fluid">
      <div class="wrapper">
      <div class="h-l-left">
        <ul>
          <li><a href="#">MY ACCOUNT</a></li>
          <li><a href="#">VND</a>
            <ul>
              <li><a href="#">VND</a></li>
              <li><a href="#">USD</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="h-l-right">
        <?php if(isset($_SESSION["customer_email"])): ?>
          <ul>
            <li><a href="#"><?php echo $_SESSION["customer_email"]; ?></a></li>
            <li><a href="index.php?controller=login&action=logout">Đăng xuất</a></li>
          </ul>
        <?php else: ?>
          <ul>
            <li><a href="index.php?controller=login&action=login">LOGIN</a></li>
            <li><a href="index.php?controller=login&action=register">SIGN UP</a></li>
          </ul>
        <?php endif; ?>
      </div>
      </div>
    </div>  
    <div class="header1 container-fluid">
      <div class="wrapper">
        <div class="logo"><img src="../assets/upload/img/logo2.jpg" style="width: 40%;"></div>
        <div class="header-menu">
          <ul>
            <li><a href="index.php"  style="color: #01b7f2;">HOME</a></li>
            <li><a href="index.php?controller=products">HOTELS</a></li>
            <li><a href="index.php?controller=products">TOURS</a></li>
            <li><a href="index.php?controller=products">CARS</a></li>
            <li><a href="index.php?controller=products">CRUISES</a></li>
            <li><a href="index.php?controller=products">FLIGHTS</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="header1 container-fluid" id="header-menu">
      <div class="wrapper">
        <div class="logo"><img src="../assets/upload/img/logo2.jpg" style="width: 40%;"></div>
        <div class="header-menu">
          <ul>
            <li><a href="index.php"style="color: #01b7f2;">HOME</a></li>
            <li><a href="index.php?controller=products">HOTELS</a></li>
            <li><a href="index.php?controller=products">TOURS</a></li>
            <li><a href="index.php?controller=products">CARS</a></li>
            <li><a href="index.php?controller=products">CRUISES</a></li>
            <li><a href="index.php?controller=products">FLIGHTS</a></li>
          </ul>
        </div>
      </div>
  </div>
  <!-- login -->
  <div id="login" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeLogin()">&times;</a>
  <div class="overlay-content">
    <div class="logo"><img src="../assets/upload/img/logo2.jpg" style="width: 40%;"></div>
    <input type="text" value="user name" onfocus="if(this.value == 'user name') this.value ='';" onblur="if(this.value == '') this.value = 'user name';"
   class="i-t" style="margin-top: 20px;">
   <input type="text" value="password" onfocus="if(this.value == 'password') this.value ='';" onblur="if(this.value == '') this.value = 'password';"
   class="i-t" style="margin-top: 10px;">
   <div style="margin-top: 20px; width: 100%; display: flex;">
        <input type="checkbox" style="margin-right: 5px;">
        <div style="margin-top: -1px;">Remember me</div>
        <div style="margin-top: -1px; margin-left: 70px;color: #01b7f2; cursor: pointer;">Forgot password?</div>
  </div>
  <input class="bu1" type="button" value="LOGIN" style="background: #98ce44; width: 100%; line-height: 30px; border: none; color: white; margin-top: 20px;">
  <div style="background-color: #f5f5f5; width: 100%; height: 1px; margin-top: 15px;"></div>
  <div style="margin-top: 10px;">Don't have an account?
    <span style="color: #01b7f2; cursor: pointer;" onclick="changeSignUp()"> Sign up</span>
  </div>
  </div>
</div>

<!-- /login -->
<!-- sign up -->
  <div id="sign_up" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeSignUp()">&times;</a>
  <div class="overlay-content">
    <div class="logo"><img src="../assets/upload/img/logo2.jpg" style="width: 40%;"></div>
    <input type="text" value="user name" onfocus="if(this.value == 'user name') this.value ='';" onblur="if(this.value == '') this.value = 'user name';"
   class="i-t" style="margin-top: 20px;">
   <input type="text" value="email address" onfocus="if(this.value == 'email address') this.value ='';" onblur="if(this.value == '') this.value = 'email address';"
   class="i-t" style="margin-top: 10px;">
   <div style="margin-top: 20px; width: 100%; text-align: left; color: #978583;">
        By signing up, I agree to Travelo's Terms of Service, Privacy Policy, Guest Refund Policy, and Host Guarantee Terms
  </div>
  <input class="bu1" type="button" value="SIGN UP" style="background: #98ce44; width: 100%; line-height: 30px; border: none; color: white; margin-top: 20px;">
  <div style="background-color: #f5f5f5; width: 100%; height: 1px; margin-top: 15px;"></div>
  <div style="margin-top: 10px;">Already a member?
    <span style="color: #01b7f2; cursor: pointer;" onclick="changeLogin()">Login</span>
  </div>
  </div>
</div>
<!-- /sign up -->