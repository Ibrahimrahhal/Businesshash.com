
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <link href="css/done/lg.css" rel="stylesheet" type="text/css" media="screen and (min-width:1024px)" />
    <link href="css/done/md.css" rel="stylesheet" type="text/css" media="screen and (max-width:1023px) and (min-width:550px)" />
    <link href="css/done/sm.css" rel="stylesheet" type="text/css" media="screen and (max-width:549px)" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

  </head>
  <body>
    <?php
    include __DIR__."\\..\\php_modules\\"."header.php";
 ?>

    <h1 class="main-title">اختر من اقوى تصنيفات المقالات المفيدة في عالم الريادة</h1>
    <main>

      <a class="cata-item"href="#"><span class="cata-item-text">تسويق إلكتروني</span></a>
      <a class="cata-item"href="#"><span class="cata-item-text">تسويق من خلال تناقل الكلام</span></a>
      <a class="cata-item"href="#"><span class="cata-item-text">تسويق من شركة الى شركة </span></a>
      <a class="cata-item"href="#"><span class="cata-item-text">Search Engine Optimization</span></a>


    </main>
    <script>
    function myFunction(x) {
        x.classList.toggle("change");
        document.getElementsByClassName("header-nav-menu-res")[0].classList.toggle("hidden");
    }
    </script>
  </body>
</html>
