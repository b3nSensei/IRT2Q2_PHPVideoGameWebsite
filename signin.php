<?php
  //include the header and signq file.
  include 'header.php';
  include 'signq.php';
  if (isset($_SESSION['mail'])) 
  {
  	$_SESSION['msg'] = "You are already logged in";
  	header('location: profil.php');
  }
?>

<h2 style="text-align: center;"><b>Sign-in</b></h2>

<div class="container site">
  <div class="card">
    <div class="card-body">
      <form method="POST" action="signin.php" class="form-group col-md-12">
        <div class="form-group col-md-12" style="text-align: center;">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Enter email" name="postmail" required="required" autocomplete="on">
        </div>
        <div class="form-group col-md-12" style="text-align: center;">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="postmdp"
            required="required" maxlength="18" autocomplete="off">
        </div>
        <div class="form-group col-md-12" style="text-align: center;">
          <button type="submit" name="signin-btn" class="btn btn-primary">Sign in</button>
        </div>
        <div class="form-group form-check" style="text-align: center;">
          <p>Don't have an account? <a href="signup.php">Sign up</a></p>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
<footer style="text-align: center;">Copyright benjamin pittonet<br>Projet PHP - HEH 2019</footer>
</html>