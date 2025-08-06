<?php
session_start();
$base_path = 'CRM-eCOMMERCE';

session_unset();
session_destroy();
echo '<script> location.href="/' . $base_path . '/index.php"</script>';
