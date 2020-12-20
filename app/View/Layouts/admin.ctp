<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title><?php echo $title_for_layout?></title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script language="JavaScript" type="text/javascript" src="<?php echo HTTP_HOST?>/js/jquery.min.1.7.1.js"> </script>
    <script>var http_root = '<?php echo HTTP_HOST;?>';</script>
    <?php echo $this->Html->css('admin'); ?>
    <?php echo $scripts_for_layout ?>
  </head>
  <body>
    <div id="header">
      <?php echo $this->element('header'); ?>
    </div>
    <div id="content">
      <?php echo $content_for_layout ?>
    </div>
    <div id="footer">
      <?php //echo $this->element('footer'); ?>
    </div>
  </body>
</html>