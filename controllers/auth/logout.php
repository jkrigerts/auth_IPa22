<?php
auth();

// Iztīrīt sesiju
session_unset();
session_destroy();

// Set cookie parameters
$params = session_get_cookie_params();

// Set the session cookie to expire in the past
setcookie(session_name(), '', time() - 3600,
          $params['path'], $params['domain']);

// Pārsūtīt uz login
header("Location: /login");
exit();