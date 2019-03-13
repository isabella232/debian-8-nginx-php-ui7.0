<?php
$ver = phpversion();
if ( preg_match("/^7\.0\..*$/", $ver))
{
  echo "Success";
} else {
  echo "Failure";
}

?>
