<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/done/lg.css" rel="stylesheet" type="text/css" media="screen and (min-width:1024px)" />
<link href="css/done/md.css" rel="stylesheet" type="text/css" media="screen and (max-width:1023px) and (min-width:550px)" />
<link href="css/done/sm.css" rel="stylesheet" type="text/css" media="screen and (max-width:549px)" />
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>

<div id="fullpage">
<div class="section page-one">


<header>
<div class="header" >


<img src="../assets/Logoheader.svg" class="header-logo"/>
<nav>

  <div class="menu-animation">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div>

</nav>
</div>
<div class="menu-items">
  <a class="menu-item item3 hidden" href="../Contact/contact.html"> تواصل</a>
  <a class="menu-item item2 hidden" href="../Learn/waiting.html">التعليم</a>
  <a class="menu-item item2 hidden" href="../Tools/index.html">الادوات</a>
  <a class="menu-item item1 hidden" href="../index.html">الرئيسية</a>


</div>
</header>

<main class="page-one-main">
<h1 class="page-one-main-h1">إبحث في اقوى المقالات</h1>
<form class="page-one-main-input-group" method="get" action="">
  <button type="submit" class="page-one-main-input-submit"><i class="fa fa-search"></i></button>

  <input type="search" placeholder="ابحث هنا" class="page-one-main-input-search" />
</form>
<a href="../Cata/Cata.php" class="cata-btn">تصفح كل الاقسام</a>

</main>
</div>
<div class="every_thing">


<div class="cata">
  <a class="cata-item"href="#"><span class="cata-item-text">مصطلحات أعمال</span></a>
  <a class="cata-item"href="#"><span class="cata-item-text">إدارة أعمال</span></a>
  <a class="cata-item"href="#"><span class="cata-item-text"> إقتصاد أعمال</span></a>
  <a class="cata-item"href="Cata_Marketing.php"><span class="cata-item-text">تسويق </span></a>
  <a class="cata-item"href="Cata_Selling.php"><span class="cata-item-text"> مبيعات</span></a>
  <a class="cata-item general"href="#"><span class="cata-item-text "> عام</span></a>
  <a class="cata-item"href="#"><span class="cata-item-text tools"> أدوات</span></a>

</div>
<div class="_results">
  <?php
      include __DIR__."\\..\\Search\\item_dynamix.php";
        s_item("#","عنوان مقترح",
        "شرح شرح شرح شرح شرح شرح شرح شرح شرح شرح شرح شر "
        ," ");
        s_item("#","عنوان مقترح",
        "شرح شرح شرح شرح شرح شرح شرح شرح شرح شرح شرح شر "
        ," ");
        s_item("#","عنوان مقترح",
        "شرح شرح شرح شرح شرح شرح شرح شرح شرح شرح شرح شر "
        ," ");
        s_item("#","عنوان مقترح",
        "شرح شرح شرح شرح شرح شرح شرح شرح شرح شرح شرح شر "
        ," ");
        s_item("#","عنوان مقترح",
        "شرح شرح شرح شرح شرح شرح شرح شرح شرح شرح شرح شر "
        ," ");
   ?>
</div>

</div>
<div class="section page-four">
  <div class="page-four-main">

  </div>
  <?php
  include __DIR__."\\..\\php_modules\\"."footer.php";

   ?>
</div>
</div>

<script src="../vendors/JQuery/jquery-3.3.1.min.js"></script>
<script src="modules/jquery-menu.js"></script>
<script src="modules/jquery-scale.js"></script>
</body>
</html>
