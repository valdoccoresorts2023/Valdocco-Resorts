<?php
session_start();
session_destroy();
// va a login page:
header('Location: index.php');
?>