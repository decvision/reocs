<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
     <?php echo $this->Html->charset(); ?>
<title>
     <?php echo $title_for_layout; ?>
</title>
<?php
     echo $this->Html->meta('icon');
echo $this->Html->css('login_form');
echo $scripts_for_layout;
?>
</head>
<body>
<div id="viewbase">
<div class="login_box">
    <h2><?php echo $login_for_layout; ?></h2>
</div>
<div class="login_form">
    <?php echo $content_for_layout;?>
</div>
<div class="illust_box">
    <?php echo $illust_for_layout; ?>
</div>
</div>
</body>
</html>