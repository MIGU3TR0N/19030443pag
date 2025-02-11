<?php
require_once ('header.php');
?>
    <!-- Start: MAIN CONTENT -->
    <div class="content">
      <div class="container">
        <div class="page-header">
          <h1>Signup to Bootbusiness</h1>
        </div>
        <div class="row">
          <div class="span6 offset3">
            <h4 class="widget-header"><i class="icon-gift"></i> Be a part of Bootbusiness</h4>
            <div class="widget-body">
              <div class="center-align">
                <form class="form-horizontal form-signin-signup">
                  <input type="text" name="email" placeholder="Email">
                  <input type="password" name="password" placeholder="Password">
                  <input type="password" name="password_confirmation" placeholder="Password Confirmation">
                  <div>
                    <input type="submit" value="Signup" class="btn btn-primary btn-large">
                  </div>
                </form>
                <h4><i class="icon-question-sign"></i> Already have an account?</h4>
                <a href="signin.html" class="btn btn-large bottom-space">Signin</a>
                <h4><i class="icon-thumbs-up"></i> Sign in with third party account</h4>
                <ul class="signin-with-list">
                  <li>
                    <a class="btn-twitter">
                      <i class="icon-twitter icon-large"></i>
                      Signin with Twitter
                    </a>
                  </li>
                  <li>
                    <a class="btn-facebook">
                      <i class="icon-facebook icon-large"></i>
                      Signin with Facebook
                    </a>
                  </li>
                  <li>
                    <a class="btn-google">
                      <i class="icon-google-plus icon-large"></i>
                      Signin with Google
                    </a>
                  </li>
                  <li>
                    <a class="btn-github">
                      <i class="icon-github icon-large"></i>
                      Signin with Github
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End: MAIN CONTENT -->
<?php
require_once ('footer.php');
?>