<div class="contact-form">
<h2>Request more information on Fran Ferger</h2><br/>
<?php echo $this->form_validation->error_string;?>
<?php echo form_open('email');?>
	<p><input type="hidden" name="subject" value="FranFerger.com Website Contact Form Inquiry"/></p>
	<p>First Name *<br/><?php echo form_error('firstname', '<div class="error">', '</div>'); ?><input type="text" name="firstname" value="<?php echo set_value('firstname');?>" size="50" /></p>
	<p>Last Name *<br/><?php echo form_error('lastname', '<div class="error">', '</div>'); ?><input type="text" name="lastname" value="<?php echo set_value('lastname');?>" size="50" /></p>
	<p>Email Address *<br/><?php echo form_error('email', '<div class="error">', '</div>'); ?><input type="text" name="email" value="<?php echo set_value('email');?>" size="50" /></p>
	<p>Phone Number<br/><?php echo form_error('phone', '<div class="error">', '</div>'); ?><input type="text" name="phone" value="<?php echo set_value('phone');?>" size="50" /></p>
	<p>How did you hear about us?<br/><?php echo form_error('howhear', '<div class="error">', '</div>'); ?><input type="text" name="howhear" value="<?php echo set_value('howhear');?>" size="50" /></p>
	<p>Message Body<br/><?php echo form_error('message', '<div class="error">', '</div>'); ?><textarea name="message" rows="10" cols="50"><?php echo set_value('message');?></textarea></p>
	<p><input type="submit" value="Send Message" /></p>
</form>
</div>