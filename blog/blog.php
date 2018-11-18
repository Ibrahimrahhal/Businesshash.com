<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/blog/done/lg.css" rel="stylesheet" type="text/css" media="screen and (min-width:1024px)" />
<link href="css/blog/done/md.css" rel="stylesheet" type="text/css" media="screen and (max-width:1023px) and (min-width:550px)" />
<link href="css/blog/done/sm.css" rel="stylesheet" type="text/css" media="screen and (max-width:549px)" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>


<header>
  <img class="logo-header" src="../assets/Logoheader.svg" />

  <nav>
    <div class="container" onclick="myFunction(this)">
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
</div>
<div class="header-nav-menu-res hidden">
  <a class="header-nav-menu-text" href="#">
    المدونة
  </a>
  <a class="header-nav-menu-text" href="#">
    أدوات
  </a>
  <a class="header-nav-menu-text" href="#">
  تعلم
  </a>
  <a class="header-nav-menu-text" href="#">
  تواصل
  </a>
</div>
    <div class="header-nav-menu">
      <a class="header-nav-menu-text" href="#">
        المدونة
      </a>
      <a class="header-nav-menu-text" href="#">
        أدوات
      </a>
      <a class="header-nav-menu-text" href="#">
      تعلم
      </a>
      <a class="header-nav-menu-text" href="#">
      تواصل
      </a>
    </div>
    <div class="header-nav-searchbar">
<button type="submit" class="header-nav-searchbar-submit" ><i class="fas fa-search"></i></button>
<input type="search" class="header-nav-searchbar-search" placeholder="أبحث عن اي موضوع"  />

</div>

  </nav>
</header>
<div class="main-wrapper">


<main>
  <hr align="right" class="main-first-line-break" />
<h1 class="blog-main-title">عنوان المقاله طويل طويل</h1>
<h2 class="blog-main-cata">تصنيف المقاله</h2>
<h3 class="blog-main-date">من اكتوبر 13</h3>
<img src="BlogImages/0000001.jpg" class="blog-main-image" />
<div class="blog-main-para">
  <h2 class="blog-main-para-mainsub-title">كيف تجيب عندما يخبرك عملاء ان منتجاتك غالية جدا  </h2>
  <div class="blog-main-para-text">
    اذا كنت في مجال  الصناعة  لأي فترة كانت فقد سمعت عذا الاعتراض من العملاء من قبل سيكون رد فعلك الاول هو الاساءة  ولكن في بعض الاحيان بسبب الافكار المسبقة حول الصناعة و قيمة خدماتك قبل ان تدخل في هالة خذ الوقت الكافي في الكشف عن شعورهم بهذه الطريقة – في بعض الاحيان يمكن ان يوفر لك مشروع محتمل التفاوض ليس امرا سيئا ففي النهاية بعض العملاء يقومون بالاعمال التجارية بهذه الطريقة ولكن قد تكون هناك معان خفية بمايعنونه في الواقع عندما يتهمونك بالاتفاع الاسعار
  </div>


</div>
<div class="blog-main-comments">


</div>
<div class="blog-main-comments-speakyourmind">



</div>

</main>
<aside>
<br />
<br />
<br />
<br />
<br />
<br />
<?php
include __DIR__."\\..\\php_modules\\"."widget.php";

 ?>

</aside>
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
<script src="../vendors/JQuery/jquery-3.3.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

<script src="modules/jquery-search.js"></script>
</body>

</html>
