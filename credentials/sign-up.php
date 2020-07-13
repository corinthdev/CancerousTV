<?php include '_css.php'; ?>

<body class="signup-page">
    <div class="signup-box">
        <div class="logo">
            <a href="javascript:void(0);"><b>ISA - SED</b></a>
            <small>WELCOME TO INFORMATION MANAGEMENT SYSTEM</small>
        </div>
        <div class="card">
            <div class="body">
              <?php include 'logreg_function.php'; ?>
              <form id="sign_up" method="POST" action="sign-up.php">
                  <div class="msg">Hello! Please enter your new credentials here.</div>
                  <div class="input-group">
                      <span class="input-group-addon">
                          <i class="material-icons">account_circle</i>
                      </span>
                      <div class="form-line">
                          <input type="hidden" class="form-control" name="group_id" value="1">
                          <input type="text" class="form-control" name="firstname" placeholder="First name" required autofocus>
                      </div>
                  </div>
                  <div class="input-group">
                      <span class="input-group-addon">
                          <i class="material-icons">account_box</i>
                      </span>
                      <div class="form-line">
                          <input type="text" class="form-control" name="lastname" placeholder="Last name" required autofocus>
                      </div>
                  </div>
                  <div class="input-group">
                      <span class="input-group-addon">
                          <i class="material-icons">person</i>
                      </span>
                      <div class="form-line">
                          <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                      </div>
                  </div>
                  <div class="input-group">
                      <span class="input-group-addon">
                          <i class="material-icons">lock</i>
                      </span>
                      <div class="form-line">
                          <input type="password" class="form-control" name="password" minlength="6" placeholder="Password" id="pass1" onkeyup="checkPass(); return false;" required>
                      </div>
                  </div>
                  <div class="input-group">
                      <span class="input-group-addon">
                          <i class="material-icons">lock</i>
                      </span>
                      <div class="form-line">
                          <input type="password" class="form-control" name="confirmpassword" minlength="6" placeholder="Confirm Password" id="pass2" onkeyup="checkPass(); return false;" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <center><div id="error-nwl"></div></center>
                  </div>

                  <button class="btn btn-block btn-lg bg-blue waves-effect" type="submit" name="btn_submit">SIGN UP</button>

                  <div class="m-t-25 m-b--5 align-center">
                      <a href="./">Already have an account?</a>
                  </div>
              </form>
            </div>
        </div>
    </div>
    <?php include '_js.php'; ?>
</body>
<script type="text/javascript">
  function checkPass()
  {
      var pass1 = document.getElementById('pass1');
      var pass2 = document.getElementById('pass2');
      var message = document.getElementById('error-nwl');
      var goodColor = "#66cc66";
      var badColor = "#ff6666";
      
      if(pass1.value.length > 5)
      {
          pass1.style.backgroundColor = goodColor;
          message.style.color = goodColor;
          message.innerHTML = "character number ok!"
      }
      else
      {
          pass1.style.backgroundColor = badColor;
          message.style.color = badColor;
          message.innerHTML = "Enter atleast 6 characters"
          return;
      }
    
      if(pass1.value == pass2.value)
      {
          pass2.style.backgroundColor = goodColor;
          message.style.color = goodColor;
          message.innerHTML = "Password match!"
      }
      else
      {
          pass2.style.backgroundColor = badColor;
          message.style.color = badColor;
          message.innerHTML = "Password doesn't match!"
      }
  }  
</script>