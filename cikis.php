<?php

session_start();
session_destroy();
header("location:anasayfa.php?exit");
exit();

?>