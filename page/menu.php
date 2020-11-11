<?php
if (isset($_COOKIE["langue"])) {

  $mem='menu_ar.php';
  include($mem);

} else {
  $mem='menu_fr.php';
  include($mem);

}

?>