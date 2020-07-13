
<?php include '_css.php'; ?>
<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href=".././"><b>CancerousTV</b></a><br/>
            <small>WELCOME!</small>
        </div>
        
        <div class="card">
            <div class="body">
                <?php include 'logreg_function.php'; ?>
                <form id="sign_in" method="POST" action="./">
                    <div class="msg">ENTER YOUR CREDENTIALS HERE</div>
                      <?php if (isset($_SESSION['error'])) : ?>
                        <div class="alert alert-danger">
                          <p>
                            <center>  
                              <?php 
                                echo $_SESSION['error']; 
                                unset($_SESSION['error']);
                              ?>
                              <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                             </center>
                          </p>
                        </div>
                      <?php endif ?>
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
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <button class="btn btn-block bg-blue waves-effect" type="submit" name="btn_login">SIGN IN</button>
                        </div>
                    </div>
                    <div class="row m-t-15">
                        <div class="col-xs-12" align="center">
                            POWERED BY: <a href="#!">CORINTHDEV</a><br/><br/>
                            CLICK HERE <a href=".././">WEBSITE</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include '_js.php'; ?>
</body>