<?php
$config = parse_ini_file("config.ini", true);
$url = parse_url ($_SERVER['REQUEST_URI']);



if (isset($config['GET '.$url['path']]['title'])) {
  $content_title = $config['GET '.$url['path']]['title'];  
} else {
  $content_title = 'Andi&Robi';
}

if (isset($config['GET '.$url['path']]['class'])) {
  $content_class = $config['GET '.$url['path']]['class'];  
} else {
  $content_class = 'main';
}

if (isset($config['GET '.$url['path']]['include'])) {
  $include_path = 'inc/'.$config['GET '.$url['path']]['include'];  
} else {
  $include_path = 'inc/404.php';
}

?>
<!doctype html>
<html lang="hu">
<head>
  <title><?php echo $content_title;?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0,target-densitydpi=device-dpi, user-scalable=no" />

  <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favfavicon/favicon-16x16.png">
  <link rel="icon" type="image/ico" href="/favicon.ico">
  <link rel="icon" type="image/png" href="/favicon.png">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800&subset=latin,latin-ext" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Arizonia&subset=latin,latin-ext" rel="stylesheet">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">

  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>
<body class="hu <?php echo $content_class;?>">
  
<header class="site-header" id="navigation">
    <nav class="main-navigation">

        <a class="mobile-navigation open" href="#navigation"></a>
        <a class="mobile-navigation close" href="#top"></a>

        <ul class="items">
            <li class="home">
                <a href="/">Nyitó oldal</a>
            </li>  
            <li class="aboutus">
                <a href="/rolunk">Rólunk</a>
            </li>          
            <li class="guests">
                <a href="/vendegek">Vendégek</a>
            </li>
            <li class="location">
                <a href="/helyszin">Helyszín</a>
            </li>
            <li class="program"> 
                <a href="/program">Program</a>
            </li>
            <li class="presents">
                <a href="/ajandek">Ajándék</a>
            </li>
            <li class="accomodations">
                <a href="/szallas">Szállás</a>
            </li>
        </ul>
        <!--<p class="language">
            <a href="/en">English</a>
        </p>-->
    </nav>
</header>
  
<main class="site-content">
<?php 
  include $include_path;
?>
</main>
  
<footer class="site-footer">
    <nav class="secondary-navigation">
      <p>Ha kérdésed van, keress minket emailben vagy telefonon!</p>
      <ul class="items">
        <li class=bride>
          <strong>Menyasszony:</strong> 
          <a href=tel://+36704265691 class=button> 📞 + 36 70 426 5691</a>
        </li>
        <li class=groom>
          <strong>Vőlegény:</strong> 
          <a href=tel://+36203886353 class=button> 📞 + 36 20 388 63 53</a>
        </li>
      </ul>
    </nav>
</footer>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-97549491-1', 'auto');
  ga('send', 'pageview');
</script>
  
</body>
</html>

