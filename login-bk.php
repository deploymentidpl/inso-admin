<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
  <?php require_once("include/inc-head.php"); ?>
</head>

<body class="authentication-page">
  <div class="authentication-bg">
    <img class="auth-bg" src="media/images/auth-bg.jpg" width="1920" height="1080" alt="Authentication BG" />
  </div>
  <div class="authentication-wrapper">
    <div class="authentication-card card">
      <img class="auth-logo-element" src="media/images/inso-owl-logo.svg" alt="Logo" />
      <!-- <img class="auth-logo" src="media/images/logo-dark.svg" alt="Logo" /> -->
      <div id="login" class="auth-item">
        <div class="columns is-multiline">
          <div class="column is-12 col-form">
            <div class="form-group">
              <label class="form-label">Username*</label>
              <input type="text" class="form-control" autocomplete="off" />
            </div>
          </div>
          <div class="column is-12 col-form">
            <div class="form-group">
              <label class="form-label">Password*</label>
              <input type="password" class="form-control" autocomplete="off" />
            </div>
          </div>
          <div class="column is-12 col-form">
            <div class="is-flex is-align-items-center is-gap-1 is-justify-content-space-between">
              <div class="checkbox-group">
                <div class="checkbox-item">
                  <input id="remember-me" class="form-check-input" name="remember-me" type="checkbox" />
                  <label for="remember-me" class="form-check-label"><span>Remember me</span></label>
                </div>
              </div>
              <a class="forgot-password auth-toggle-btn" data-target="forgot-password" href="#">Forgot your password?</a>
            </div>
          </div>
          <div class="column is-12 col-form">
            <a class="btn btn-primary w-100" href="index.php">Login</a>
          </div>
        </div>
        <span class="dont-have-account has-text-centered is-block">Don't have account? <a href="#" class="auth-toggle-btn fw-600 is-uppercase" data-target="register">Register</a></span>
      </div>
      <div id="register" class="auth-item">
        <div class="columns is-multiline">
          <div class="column is-12 col-form">
            <div class="form-group">
              <label class="form-label">Name*</label>
              <input type="text" class="form-control" autocomplete="off" />
            </div>
          </div>
          <div class="column is-12 col-form">
            <div class="form-group">
              <label class="form-label">Email Address*</label>
              <input type="email" class="form-control" autocomplete="off" />
            </div>
          </div>
          <div class="column is-12 col-form">
            <div class="form-group">
              <label class="form-label">Password*</label>
              <input type="password" class="form-control" autocomplete="off" />
            </div>
          </div>
          <div class="column is-12 col-form">
            <div class="form-group">
              <label class="form-label">Confirm Password*</label>
              <input type="password" class="form-control" autocomplete="off" />
            </div>
          </div>
          <div class="column is-12 col-form">
            <div class="is-flex is-align-items-center is-gap-1 is-justify-content-space-between">
              <div class="checkbox-group">
                <div class="checkbox-item">
                  <input id="i-agree" class="form-check-input" name="i-agree" type="checkbox" />
                  <label for="i-agree" class="form-check-label"><span>I agree to the <a href="#">terms & conditions</a></span></label>
                </div>
              </div>
            </div>
          </div>
          <div class="column is-12 col-form">
            <button class="btn btn-primary w-100" type="submit">Register</button>
          </div>
        </div>
        <span class="dont-have-account has-text-centered is-block">Already have an account? <a href="#" class="fw-600 is-uppercase auth-toggle-btn" data-target="login">Login here</a></span>
      </div>
      <div id="forgot-password" class="auth-item">
        <div class="columns is-multiline">
          <div class="column is-12 col-form">
            <div class="form-group">
              <label class="form-label">Email Address*</label>
              <input type="email" class="form-control" autocomplete="off" />
            </div>
          </div>
          <div class="column is-12 col-form">
            <button class="btn btn-primary w-100" type="submit">Reset Password</button>
            <a class="btn btn-outline-gray auth-toggle-btn w-100 mt-5" data-target="login" href="#">Back</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php require_once("include/inc-foot-scripts.php"); ?>
  <script>
    //Block Hide Show
    $(".auth-toggle-btn").click(function() {
      var target = $(this).data('target');
      $(".auth-item").not("#" + target).hide(); // Hide all blocks except the target
      $("#" + target).toggle(); // Toggle visibility of the target block
    });
  </script>
</body>

</html>