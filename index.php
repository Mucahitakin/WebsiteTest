<?php
// Check server disable functions
echo "<pre>";
print_r(explode(",", ini_get("disable_functions")));
echo "</pre>";
?>
