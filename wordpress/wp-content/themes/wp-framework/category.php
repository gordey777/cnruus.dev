<?php


/*array( '30', '31' список категорий )*/
if ( in_category( array( '30', '31' ) ) || post_is_in_descendant_category( array( '30', '31' ) ) ) {
  include 'category-img.php';
}
elseif ( in_category( array( '29', '63', '32' ) ) || post_is_in_descendant_category( array( '29', '63', '32' ) ) ) {
  include 'category-29.php';
}
else {
  include 'category-text.php';
}


 ?>
