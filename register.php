<?php
include 'includ/auth_header.php';
?>
<form class="form-signin mt-5" onsubmit="reg_user()">
  <h1 class="h3 mb-3 font-weight-normal text-center">Sign up</h1>
  <div class="form-group">
    <label for="inputEmail" class="sr-only">First name</label>
    <input type="text" id="firstName" class="form-control" placeholder="First name" autofocus>
  </div>
  <div class="form-group">
    <label for="inputEmail" class="sr-only">Last name</label>
    <input type="text" id="lastName" class="form-control" placeholder="Last name" autofocus>
  </div>
  <div class="form-group">
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" id="email" class="form-control" placeholder="Email address" autofocus>
  </div>
  <div class="form-group">
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="password" class="form-control" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="inputPassword" class="sr-only">Retype Password</label>
    <input type="password" id="rpassword" class="form-control" placeholder="Password">
  </div>
  <div class="checkbox mb-3">
    <input type="checkbox" value="remember-me"> <small>Remember me</small>
  </div>
  
  <button class="btn btn-md btn-primary" id="userbutton" type="submit">Sign up</button>
  <p class="mt-5 mb-3 text-muted"> Already yet registered? <a href="login.php">login here</a></p>
</form>
<?php
include 'includ/auth_footer.php';
?>