<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">@import url("<?php echo base_url().'/css/style.css'; ?>");</style>

<title><?php echo isset($title) ? $title : ''; ?></title>
</head>
<body> 
<div id="wrapper"> 
    <div id="header">
        <?php $this->load->view('header'); ?>
    </div>
    <div id="navigationAtas">
        <?php $this->load->view('navigation'); ?>
    </div>
    <div id="main">
        <?php $this->load->view($main_view); ?>
    </div>
    <div id="footer">
        <?php $this->load->view('footer'); ?>
    </div>
</div>
</body>
</html>
