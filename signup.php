<?php
//include the header and signq file.
  include 'header.php';
  include 'signq.php';
?>

<h2 style="text-align: center;"><b>Sign-up</b></h2>

<div class="container site">
  <div class="card">
    <div class="card-body">
      <form method="POST" action="signup.php" class="form-group col-md-12">
        <div class="form-group col-md-12" style="text-align: center;">
          <label for="InputEmail">Email address</label>
          <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp"
            placeholder="Enter email" name="postmail" required="required" autocomplete="on">
        </div>
        <div class="form-group col-md-12" style="text-align: center;">
          <label for="InputPassword">Password</label>
          <input type="password" class="form-control" id="InputPassword" placeholder="Password" name="postmdp"
            required="required" maxlength="18" autocomplete="off">
        </div>
        <div class="form-group col-md-12" style="text-align: center;">
          <button type="submit" name="signup-btn" class="btn btn-primary">Sign up</button>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
<footer style="text-align: center;">Copyright benjamin pittonet<br>Projet PHP - HEH 2019</footer>
</html>