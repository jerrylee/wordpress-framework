<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php wp_title(); ?></title>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>
  <body>
    <div id="wrap"><!-- begins sticky footer (ends in footer.php) -->
<section id="top">
  <div class="container">
    <div class="row clearfix">
      <div class="col-sm-3">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Client Logo" />
        <!--TODO:upload logo and put path -->
      </div><!--/col-sm-3 -->
      <div class="col-sm-9">PHONE</div><!--/col-sm-9 -->
    </div><!--/row -->
  </div><!--/container-->
</section><!--/top -->
