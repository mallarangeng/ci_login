<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">@import url("<?php echo base_url().'/css/loginmodule.css'; ?>");</style>
<title>Access Denied!!</title>
</head>

<body>
<div style="background:#fff;">
<?php echo "<br><br>";?>
<h4 align="center" class="err">Access Denied!<br />
 You do not have access to this resource.</h4>
<center><p><?php echo anchor('login', 'Login Page');?></p></center>
<br />
<br />
<?php die();?>
</div>
</body>
</html>