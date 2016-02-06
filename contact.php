<?php
/* 
 * Phoenix Project - Rustk: Online Runescape Toolkit
 * Copyright 2011 Overno, LLC
 *
 * $Id: contact.php 25 2011-04-02 23:54:22Z amanda $
 *
 */
	include "inc/header.inc.php";
?>
    <!-- page title -->
    <h2 class="ribbon full">Contact Us</h2>
    <div class="triangle-ribbon"></div>
    <br class="cl" />
    <!-- page content -->
    <div id="page-content" class="two-col container_12">
      <p>Use this form if you need to contact us.</p>
      <div id="message"></div>
      <form method="post" action="mail.php" name="contactform" id="contactform">
        <p>
          <label for="name">Name:</label>
          <input style="width:448px;" name="name" id="name" type="text" />
        </p>
        <p>
          <label for="email">Your Email:</label>
          <input style="width:448px;" name="email" id="email" type="text" />
        </p>
        <p>
          <label for="subject">Subject:</label>
          <input style="width:448px;" name="subject" id="subject" type="text" />
        </p>
        <p>
          <label for="comments">Your Message:</label>
          <textarea style="width:448px;height:200px;" name="comments" id="comments"> </textarea>
        </p>
        <p>
          <label for="verify">1 + 3 =</label>
          <input name="verify" id="verify" class="small" type="text" />
        </p>
        <button class="fr" type="submit" id="submit">Send</button>
      </form>
    </div>
    <!-- page sidebar -->
    <aside>
      <h3>Donate now!</h3>
		<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<input style="padding:10px 5px;background:#fff;border:none;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px;" type="hidden" name="cmd" value="_s-xclick">
			<input style="padding:10px 5px;background:#fff;border:none;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px;" type="hidden" name="hosted_button_id" value="5Z6V3APYBLEGY">
			<input style="padding:10px 5px;background:#fff;border:none;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px;" type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
			<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
		</form>
      <h3>Advertise with Us!</h3>
		<p>If you're interested in advertising with us, please state so in your message. We're not interested in linkback schemes or sites that promote violations of RuneScape's terms of service.</p>
    </aside>
    <br class="cl" />
    <br class="cl" />
  </div>
<?php
	include "inc/footer.inc.php";
?>