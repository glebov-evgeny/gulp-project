<?php
$ROOT = $_SERVER['DOCUMENT_ROOT'] . '/';
$BASE_HREF = '//' . $_SERVER['HTTP_HOST'] . (!empty($_SERVER['DOCUMENT_URI']) ? str_replace( substr(str_replace('index.php', '', $_SERVER['DOCUMENT_URI']), 1), '', $_SERVER['REQUEST_URI'] ) : '');
$URL = '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$version = isset($_GET['version']) ? urldecode( strtolower($_GET['version']) ) : '';
$partner = isset($_GET['partner']) ? urldecode( strtolower($_GET['partner']) ) : '';


include_once $ROOT . 'config.php';
// include_once $ROOT . 'elastic.php';

include_once $ROOT . 'version.php';

?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">

<head>
  <base href="<?=$BASE_HREF?>">

  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','<?= $GTM_ID?>');</script>
  <!-- End Google Tag Manager -->

  <?php if ($Facebook_ID != '') { ?>
  <!-- Facebook Pixel Code -->
  <script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '<?= $Facebook_ID ?>');
  fbq('track', 'PageView');
  </script>
  <!-- End Facebook Pixel Code -->
  <?php } ?>

  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  {% block meta %}
  <title><?= $title ?></title>
  <meta property="og:title" content="<?= $title ?>">
  <meta name="description" content="<?= $description ?>">
  <meta property="og:description" content="<?= $description ?>">
  {% endblock %}
  <meta property="og:url" content="//<?=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>">


  <link rel="stylesheet" href="https://cdn.synergy.ru/libs/fancybox/jquery.fancybox-3.5.7.min.css" />
  <link rel="stylesheet" href="https://cdn.synergy.ru/libs/swiper/swiper-5.4.5.min.css" />

  {% block styles %}
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
  {% endblock %}

	<link href="https://synergy.ru/img/favicon.ico" type="image/x-icon" rel="icon">
	<link href="https://synergy.ru/img/favicon.ico" type="image/x-icon" rel="shortcut icon">

</head>



<body class="<?= $version ? 'version-' . $version : '' ?>" id="body">

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?= $GTM_ID ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <?php if ($Facebook_ID != '') { ?>
  <!-- Facebook Pixel Code -->
  <noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=<?= $Facebook_ID ?>&ev=PageView&noscript=1"
  /></noscript>
  <!-- End Facebook Pixel Code -->
  <?php } ?>

  {% import 'form/macro.php' as form %}

  <div class="wrapper">
    {% block blocks %}
    {% endblock %}

    <section class="popups" hidden>
			{% block popups %}
			{% endblock %}
		</section>

    <a href="http://sydi.ru" style="display: none">Synergy Digital</a>

  </div><!-- wrapper -->



  <script src="https://cdn.synergy.ru/libs/jquery/jquery-3.4.1.js"></script>
  <script src="https://cdn.synergy.ru/libs/fancybox/jquery.fancybox-3.5.7.min.js"></script>
  <script src="https://cdn.synergy.ru/libs/swiper/swiper-5.4.5.min.js"></script>

  <script src="https://syn.su/js/lander.js?v=2" defer="defer"></script>

  {% block js %}
  {% endblock %}

</body>
</html>