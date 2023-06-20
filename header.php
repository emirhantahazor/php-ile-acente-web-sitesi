<?php
$db_host = "localhost";
$db_name = "sigorta";
$db_username = "root";
$db_password = "root";

try {
    $db = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_username, $db_password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //echo 'Veritabanı bağlantısı başarılı';
} catch (Exception $e) {
    echo $e->getMessage();
}
?>


<html>
  <head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/main.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>CBT Sigorta</title>
  </head>
  <body>
    <nav>
      <div class="nav-wrapper">
        <a href="anasayfa.php" class="brand-logo"><img src="img/logo.png" class="responsive-img"></a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

        <ul class="right hide-on-med-and-down ">
          <li><a href="hakkimizda.php">Hakkımızda</a></li>
          <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Ürünler</a></li>
          <li><a href="iletisim.php">İletişim</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li><a href=""><img class="responsive-img" id="facebook" src="img/facebook.png"></a></li>
          <li><a href=""><img class="responsive-img" id="twitter" src="img/twitter.png"></a></li>
          <li><a href=""><img class="responsive-img" id="instagram" src="img/instagram.png"></a></li>
          <li><a href=""><img class="responsive-img" id="linkedin" src="img/linkedin.png"></a></li>
        </ul>

        <ul id="dropdown1" class="dropdown-content">
          <li><a href="kasko.php">Kasko</a></li>
          <li><a href="#!">Trafik Sigortası</a></li>
          <li class="divider"></li>
          <li><a href="#!">DASK Sigortası</a></li>
        </ul>

      </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
      <a href="#" class="brand-logo"><img class="responsive-img" src="img/logo.png"></a>
      <li><a href="hakkimizda.php">Hakkımızda</a></li>
      <li><a href="kasko.php">Ürünler</a></li>
      <li><a href="iletisim.php">İletişim</a></li>
      <li><a href="blog.php">Blog</a></li>
    </ul>