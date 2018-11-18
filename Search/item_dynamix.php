<?php
function s_item($num,$title,$meta,$img_url) {
$strsss = "  <a href=\"{$num}\"class=\"search-item\">
    <div class=\"search-item-img\" style='background-img:url(\"{$img_url}\")'></div>
    <div class=\"search-item-sep\"></div>
    <div class=\"search-item-text\">
      <h3 class=\"search-item-title\">{$title}</h3>
      <p class=\"search-item-meta\">
          {$meta}
      </p>
    </div>


  </a>";
 echo $strsss ;


}

 ?>
