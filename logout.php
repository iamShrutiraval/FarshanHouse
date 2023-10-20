<?php
session_start();
echo "logged out successfully";
session_destroy();
header("Location:/project/pf/project/index.php?loggedout=true");
?>