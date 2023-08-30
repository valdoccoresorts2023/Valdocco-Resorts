<?php
session_start();
session_destroy();
//va a login
header('Location: index.php');
?>