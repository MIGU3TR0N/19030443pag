<?php
require_once ('header.php');
?>
    <!-- Start: MAIN CONTENT -->
    <div class="content">
      <div class="container">
        <div class="page-header">
          <h1>Contact us</h1>
        </div>
        <div class="row-fluid">
          <!-- Start: CONTACT US FORM -->
          <div class="span4 offset1">
            <div class="page-header">
              <h2>Quick message</h2>
            </div>
            <form class="form-contact-us">
              <div class="control-group">
                <div class="controls">
                  <input type="text" id="inputName" placeholder="Name">
                </div>
              </div>
              <div class="control-group">
                <div class="controls">
                  <input type="text" id="inputEmail" placeholder="Email">
                </div>
              </div>
              <div class="control-group">
                <div class="controls">
                  <textarea id="inputMessage" placeholder="Message"></textarea>
                </div>
              </div>
              <div class="control-group">
                <div class="controls">
                  <input type="submit" class="btn btn-primary btn-large" value="Send">
                </div>
              </div>
            </form>
          </div>
          <!-- End: CONTACT US FORM -->
          <!-- Start: OFFICES -->
          <div class="span5 offset1">
            <div class="page-header">
              <h2>Offices</h2>
            </div>
            <h3>North America</h3>
            <div>
              <address class="pull-left">
                <strong>Bootbusiness, Inc.</strong><br>
                123 Folsom Ave, Suite 600<br>
                USA<br>
              </address>
              <div class="pull-right">
                <div class="bottom-space">
                  <i class="icon-phone icon-large"></i> (123) 123-1234
                </div>
                <a href="mailto:contact@bootbusiness.com" class="contact-mail">
                  <i class="icon-envelope icon-large"></i>
                </a> contact@bootbusiness.com
              </div>
              <div class="clearfix"></div>
            </div>
            <h3>Europe</h3>
            <div>
              <address class="pull-left">
                <strong>Bootbusiness, Inc.</strong><br>
                123 Folsom Ave, Suite 600<br>
                UK<br>
              </address>
              <div class="pull-right">
                <div class="bottom-space">
                  <i class="icon-phone icon-large"></i> (123) 123-1234
                </div>
                <a href="mailto:contact@bootbusiness.com" class="contact-mail">
                  <i class="icon-envelope icon-large"></i>
                </a> contact@bootbusiness.com
              </div>
              <div class="clearfix"></div>
            </div>
            <h3>Asia</h3>
            <div>
              <address class="pull-left">
                <strong>Bootbusiness, Inc.</strong><br>
                123 Folsom Ave, Suite 600<br>
                India<br>
              </address>
              <div class="pull-right">
                <div class="bottom-space">
                  <i class="icon-phone icon-large"></i> (123) 123-1234
                </div>
                <a href="mailto:contact@bootbusiness.com" class="contact-mail">
                  <i class="icon-envelope icon-large"></i>
                </a> contact@bootbusiness.com
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
          <!-- End: OFFICES -->
        </div>
      </div>
    </div>
    <!-- End: MAIN CONTENT -->
<?php
require_once ('footer.php');
?>