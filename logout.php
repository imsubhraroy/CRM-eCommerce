<?php
session_start();
$base_path  = '';

session_unset();
session_destroy();
echo '<script> location.href="/index.php"</script>';
