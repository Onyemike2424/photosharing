<?php 
include 'includ/auth_header.php';  
?>
      <form class="form-signin mt-5" onsubmit="alllogin()">
        <h1 class="h3 mb-3 font-weight-normal text-center">Please sign in</h1>
        <div class="form-group">
          <label for="inputEmail" class="sr-only">Email address</label>
          <input type="email" id="loginemail" class="form-control" placeholder="Email address" autofocus>
        </div>
        <div class="form-group">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="loginpassword" class="form-control" placeholder="Password">
        </div>
        <div class="checkbox mb-3">
          <input type="checkbox" value="remember-me"> <small>Remember me</small>
        </div>
        <button class="btn btn-md btn-primary" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted"> Not yet registered? <a href="register.php">create account</a></p>
      </form>
<?php 
include 'includ/auth_footer.php';  
?>
