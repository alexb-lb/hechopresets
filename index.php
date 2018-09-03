<?php
defined('_JEXEC') or die;
$picture_path = $this->baseurl . '/templates/' . $this->template . '/images/';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <jdoc:include type="head"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--
<meta charset="UTF-8">
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
-->
  <link rel="shortcut icon"
        href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/images/favicon_1.png"
        type="image/png">
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Lato:400,700,300,300italic,400italic,700italic' rel='stylesheet'
        type='text/css'>
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/normalize.css"
        type="text/css"/>
  <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/styles.css"
        type="text/css"/>

  <meta property="og:type" content="website">
  <meta property="og:site_name" content="hechopresets.com">
  <meta property="og:title" content="Lightroom Presets">
  <meta property="og:description" content="Dan Hecho's Lightroom presets.">
  <meta property="og:url" content="http://hechopresets.com">
  <meta property="og:image" content="http://hechopresets.com/images/site_images/social_image.jpg">
  <meta property="og:image:width" content="968">
  <meta property="og:image:height" content="504">

  <!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>
<!--For Facebook button-->
<div id="fb-root"></div>
<script>(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = 'https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.11';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
<!--For Facebook button ends-->

<!--additional div for sticky footer-->
<div class="page-wrapper">

  <!--header-->
  <header class="header-wrapper">
    <div class="width-fixed header">

      <!-- logo -->
      <figure class="logo">
        <jdoc:include type="modules" name="top-logo"/>
        <!-- <a href="#"><img src="images/logo.jpg"></a> -->
      </figure>

      <!-- navigation -->
      <nav class="top-nav">
        <jdoc:include type="modules" name="top-nav"/>
      </nav>

      <div class="social-header">
        <jdoc:include type="modules" name="social"/>
      </div>

    </div>
  </header>

  <!--main -->

  <main>
    <jdoc:include type="modules" name="main_page_header"/>

    <div class="width-fixed">
      <jdoc:include type="modules" name="slider"/>
    </div>

    <div class="width-fixed">
      <jdoc:include type="message"/>
      <jdoc:include type="component"/>
      <jdoc:include type="modules" name="content"/>
    </div>

  </main>
  <!--wrapper for sticky footer ends-->
</div>

<footer class="footer-wrapper">
  <div class="width-fixed ">

<!--    <aside class="footer width-fixed">-->
<!---->
<!--      <article class="footer-block-about footer-block-gap">-->
<!--        <!--<header class="footer-header">about</header>-->-->
<!--        <jdoc:include type="modules" name="footer-about"/>-->
<!--      </article>-->
<!--      -->
<!--      -->
<!--      <div class="footer-block-products-gallery footer-block-gap">-->
<!--        -->
<!--        <article class="footer-products">-->
<!--          <!--<header class="footer-header">products</header>-->-->
<!--          <jdoc:include type="modules" name="footer-products"/>-->
<!--        -->
<!--        </article>-->
<!--        -->
<!--        <article class="footer-gallery">-->
<!--          <!--<header class="footer-header">gallery</header>-->-->
<!--          <div class="gallery-images">-->
<!--            <jdoc:include type="modules" name="footer-gallery"/>-->
<!--          </div>-->
<!--        </article>-->
<!--      -->
<!--      </div>-->
<!--      -->
<!--      <article class="footer-block-contacts footer-block-gap">-->
<!--        <!--<header class="footer-header">Contacts</header>-->-->
<!--        <jdoc:include type="modules" name="footer-contacts"/>-->
<!--        <div class="social-footer">-->
<!--          <jdoc:include type="modules" name="social"/>-->
<!--        </div>-->
<!--      -->
<!--      </article>-->
<!--    -->
<!--    </aside>-->

    <address class="authors"><a href="http://en1ight.github.io">Alexandr Bobrenko</a> & <a
              href="https://vk.com/victoria_polojenceva">Victoria Polojenceva</a> (c)2015
    </address>
  </div>
</footer>

<div class="modal" data-purchase="form" style="display: none">
  <div class="purchase-form">
    <jdoc:include type="modules" name="email-form"/>
  </div>
</div>

<!--<script src="--><?php //echo $this->baseurl ?><!--/templates/-->
<?php //echo $this->template ?><!--/js/jquery-3.2.1.min.js"></script>-->
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/js.js"></script>
<script>
  (function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function () {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
    a = s.createElement(o),
      m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
  })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

  ga('create', 'UA-11588326-2', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>