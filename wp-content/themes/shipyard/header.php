<?php
  $menu_args = [
    'menu' => 'Main Menu'
  ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge" charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/library/css/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/library/vendor/font-awesome/font-awesome.min.css">
  <title>Shipyard</title>
  <?php wp_head();?>
</head>
    <body class='home'>
        <div id="wrapper">
            <header id="header" class="header-main" role="banner">
                <nav id="main-nav" class="main-nav navigation"  data-nav-status="toggle" role="navigation">
                    <?php wp_nav_menu($menu_args); ?>
                </nav>
            </header>
            <main class="page-main" role="main">
