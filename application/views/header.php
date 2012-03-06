<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
    <meta name="keywords" content="Fran, Ferger, Francesca, Fashion, Dresses, Clothing, Clothes, Chicago" />
  <meta name="description" content="Fran Ferger - Women's Fashion and Clothing Designer" />
  <title><?=$title?></title>
  <base href="<?php echo base_url(); ?>" />
  <link rel="canonical" href="<?=current_url();?>"/>
  <?php //look for additional css files - defined in $this->data array in controller
    if (!empty($xcss)) {
      foreach ($xcss as $style) {
        print '<link rel="stylesheet" type="text/css" href="' . $style . '" media="screen, projection" />' . "\n";
      }
    }
  ?>
  <?php //look for additional js files - defined in $this->data array in controller
    if (!empty($xjs)) {
      foreach ($xjs as $script) {
        print '<script type="text/javascript" src="' . $script .'"></script>' . "\n";
      }
    }
  ?>
</head>
<body>
  <div class="container">
      <? if($this->uri->segment(1) != null){ ?>
    <div id="header">
      <div id="logo">
        <h1><a href="/"><img src="/assets/img/ff2.png"></a></h1>
      </div>
      <div id="topnav">
        <ul>
          <li><a href="/">home</a></li>
          <li><a class="<? if($this->uri->segment(1)=='about'){echo 'active';}?> " href="/about/">about</a></li>
          <li><a class="<? if($this->uri->segment(1)=='collections'){echo 'active';}?> " href="/collections/">collections</a></li>
          <li><a class="<? if($this->uri->segment(1)=='blog'){echo 'active';}?> " href="http://missferger.wordpress.com/" target="_blank">blog</a></li>
          <li><a class="<? if($this->uri->segment(1)=='contact'){echo 'active';}?> " href="/contact/">contact</a></li>
        </ul>
      </div>
      <? }?>
    </div>
    <div class="clear"></div>