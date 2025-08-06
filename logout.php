<?php
session_start();
$base_path = 'mecom';

session_unset();
session_destroy();
echo '<script> location.href="/' . $base_path . '/index.php"</script>';
