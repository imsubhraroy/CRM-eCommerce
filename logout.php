<?php
session_start();
$base_path  = '';

session_unset();
session_destroy();
echo '<script> location.href="/' . $base_path . '/index.php"</script>';
