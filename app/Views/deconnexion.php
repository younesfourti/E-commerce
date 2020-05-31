<?php
session_start();
session_destroy();
echo "<script type='text/javascript'>document.location.replace('http://localhost/E-commerce/');</script>";
exit;
?>