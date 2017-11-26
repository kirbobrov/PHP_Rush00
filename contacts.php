<!DOCTYPE html>
<html>
<head>
    <title>Peoples for sale</title>
    <meta http-equiv="content-type" content="text/html">
    <link rel="stylesheet" href="css/body.css">
     <link rel="stylesheet" href="css/login.css">
      <link rel="stylesheet" href="css/sign.css">
    <style type="text/css">
        body {
            background-position: center;
            background-image: url(img/background-global2.jpg);
            background-size: contain;
        }
        
    </style>
</head>
<body>
<div id="block-body">
<?php
    include("include/block-header.php");
?>

<div class="content-global">
<div class="abt">
    <div class="about">
    <header>
        <h1>Контакты</h1>
        <a itemprop="url" href="index.php"><span itemprop="name">ООО «Peoples 4 Sale»</span></a>
    </header>
    <h2>отдел продаж</h2>
    <p itemprop="telephone">Телефон: +38 097 100 00 01
    <p itemprop="telephone">Телефон: +38 050 100 00 01
    <p itemprop="telephone">Телефон: +38 063 100 00 01
    <h2>для премиум клиентов</h2>
    <p itemprop="telephone">Телефон: +38 097 777 77 77
    <p itemprop="telephone">Телефон: +38 050 000 50 00
    <p itemprop="telephone">Телефон: +38 093 333 33 33
    <p>Email: <a href="mailto:support@site.ru" target="_blank" itemprop="email">support@peoples4sale.com</a><br> Ответ на письма приходит в течении 5 минут<br>если вы были скомпроментированы, даже не пытайтесь нам написать.
    <p>Время работы: 
        <time itemprop="openingHours" datetime="Mo-Th 8:00-17:00">пн-чт 10:00 - 17:00, перерыв 13:00 - 13:42</time>
        <time itemprop="openingHours" datetime="Fr 8:00-16:00">пт 10:00 - 16:00, перерыв 13:00 - 12:42</time>
    <p itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">Адрес: <span itemprop="postalCode">000000</span>, Украину, <span itemprop="addressLocality">Киев</span>, <span itemprop="streetAddress">улица Банковская, дом 18</span></p>
    <a href="http://maps.yandex.ru/" target="_blank">Схема проезда на Яндекс/Google Картах</a>
    </div>
    </div>
</div>
<?php
include("include/block-footer.php");
?>
</div>
</body>
</html>