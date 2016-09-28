<?php


/*array( '30', '31' список категорий )*/
if ( in_category( array( '30', '31' ) ) || post_is_in_descendant_category( array( '30', '31' ) ) ) {
  include 'category-img.php';
}
elseif ( in_category( array( '29', '32' ) ) || post_is_in_descendant_category( array( '29', '32' ) ) ) {
  include 'category-29.php';
}
elseif ( in_category( array( '63' ) ) || post_is_in_descendant_category( array( '63' ) ) ) {
  include 'category-63.php';
}
else {
  include 'category-text.php';
}


 ?>
