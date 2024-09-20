
<?php

session_start();

$_SESSION['last_update'] = date('d-m-Y H:i:s');

unset($_SESSION['last_update'] );

echo '<pre>';
var_dump($_SESSION);
echo '</pre>';