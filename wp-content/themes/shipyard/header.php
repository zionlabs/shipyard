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
  <!-- Analytics -->
  <meta name="google-site-verification" content="vJ9xTd6UjNXiNGOvrXyZGucq0aEjHcrWWz0hNLY-VA0" />
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-47250059-2', 'auto');
    ga('send', 'pageview');

  </script>
  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "url": "http://www.leoadherence.com",
      "contactPoint": [{
        "@type": "ContactPoint",
        "telephone": "+1-917-325-7934",
        "contactType": "customer service"
      }]
    }
  </script>
  <script src="https://use.typekit.net/tki7mkc.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
  <title>Leo Website</title>
  <?php wp_head();?>
</head>
  <body class='home'>
    <div id="wrapper">
      <header id="header" class="header-main" role="banner">
        <nav id="main-nav" class="main-nav navigation"  data-nav-status="toggle" role="navigation">
          <div class="main-nav-container">
            <?php wp_nav_menu($menu_args); ?>
          </div>
        </nav>
        <nav class="mobile-nav-wrap navigation" data-nav-status="toggle" role="navigation">
          <ul class="mobile-header-nav">
            <li><a href="/">Home</a></li>
            <li><a href="/system">Our System</a></li>
            <li><a href="/innovation">Innovation</a></li>
            <li><a href="/contact">Contact</a></li>
          </ul>
        </nav>
        <a href='/'><span class='icon-logo-no-name logo-mobile-menu'></span></a>
        <a href='https://app.smrxt.com/' target='_blank'><span class='login-mobile-menu'>Log In</span></a>
        <a class="mobile-menu-toggle js-toggle-menu hamburger-menu" href="#">
          <span class="menu-item"></span>
          <span class="menu-item"></span>
          <span class="menu-item"></span>
        </a>
      </header>
      <main class="page-main" role="main">
