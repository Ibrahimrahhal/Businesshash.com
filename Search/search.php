<!DOCTYPE html>
<html >
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
<div class="main-wrapper">


    <aside>
      <?php
      include __DIR__."\\..\\php_modules\\"."widget.php";
      ?>
    </aside>


    <main>

  <?php
      include __DIR__."\\item_dynamix.php";
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




    </main>
    </div>
    <?php
    include __DIR__."\\..\\php_modules\\"."footer.php";

     ?>

    <script>
    function myFunction(x) {
        x.classList.toggle("change");
        document.getElementsByClassName("header-nav-menu-res")[0].classList.toggle("hidden");
    }
    </script>
  </body>
</html>
