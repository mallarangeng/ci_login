<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Form</title>
<style type="text/css">@import url("<?php echo base_url().'/css/loginmodule.css'; ?>");</style>
</head>

<body>
<p>&nbsp;</p>
<?php echo form_open('login/login_validate');?>
<div id="wrap_login">
    <div id="login_form">
            <div id="input">
                  <h1>Login Form</h1>
                  <div id="warning">
                    <?php 
                    $message = $this->session->flashdata('message');
                    echo $message == '' ? '' : '<p id="message">' . $message . '</p>';
                   ?>
                  </div>
                  <p><b>Username</b></p>
                  <p><input name="username" type="text" class="textfield" id="login" /></p>
                  <p><b>Password</b></p>
                  <p><input name="password" type="password" class="textfield2" id="password" autocomplete="off" /></p>
                  <div class="buttons">
                        <button type="submit" class="positive" name="login">
                            <img src="<?php echo base_url();?>/images/application_go.png" alt=""/>
                            Login
                        </button>
                  </div>
            </div>
            <div id="logoapotek">
            	<img src="<?php echo base_url();?>/images/logoapotek.jpg" />
            </div>
    </div>
</div>
</form>
</body>
</html>