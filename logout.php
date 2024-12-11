<?php
session_start();
session_unset();
session_destroy();
header("Location: index.html");
header("Location: index.html?logout=success");
exit;
?>
