<?php echo form_open('login/validate_login', array('class' => 'login')); ?>

<p>
   <?php
   echo form_label('Login: ', 'login');
   echo form_input(array('id' => 'login', 'name' => 'login', 'placeholder' => 'User or Email'));
   ?>
</p>

<p>
   <?php
   echo form_label('Password: ', 'password');
   echo form_password(array('id' => 'password', 'name' => 'password', 'placeholder' => 'Password'));
   ?>
</p>

<p>
   <?php echo form_button(array('class' => 'login-button', 'type' => 'submit', 'content' => 'Login')); ?>
</p>

<p>
   <?php echo anchor('login/signup', 'Create Account!', array('id' => 'login-create')); ?>
</p>

<?php
echo form_close();

if (isset($error)) {
   ?>
   <p class="error" id="login_error"><?php echo $error; ?></p>
<?php } ?>
