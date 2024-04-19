<?php


// Iztīrīt sesiju
session_unset();
session_destroy();
// Iztīrīt cookies
// Pārsūtīt uz login
header("Location: /login");
exit();
echo "Logout bez view";