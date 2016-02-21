<!DOCTYPE html>
<html lang="en" class="no-js">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <?php echo css('assets/css/main.css') ?>
  <script type="text/javascript">
    document.getElementsByTagName("html")[0].className = "js";    
  </script>
  <link href='https://fonts.googleapis.com/css?family=Arimo:400,700,400italic' rel='stylesheet' type='text/css'>
</head>
<body>

  <div id="wrap" class="wrap">
    
    <a href="#menu" id="menu-link" class="menu-link">Menu</a>

    <header class="header cf" role="banner" id="header">
      <a class="logo" href="<?php echo url() ?>">
        <?php echo $site->title()->html() ?>
      </a>
      <?php snippet('menu') ?>
    </header>