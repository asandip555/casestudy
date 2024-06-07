<?php

$user_authenticated = false
if (!$user_authenticated){
// If the user is not authenticated, send
// a Location header to redirect the browser to login.php
header("Location: /login.php");
// Stop rendering the rest of the page
die();
}

 ?>
