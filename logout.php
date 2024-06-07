<?php
session_start();
session_destroy();

// Send a 200 OK response
http_response_code(200);
?>