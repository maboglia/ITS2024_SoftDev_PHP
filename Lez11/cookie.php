<?php

session_start();

setcookie("username", "Mario", time() + 3600, "/"); // Scadenza tra un'ora

echo '<pre>';
var_dump($_COOKIE);
echo '</pre>';