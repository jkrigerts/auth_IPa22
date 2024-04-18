<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Include DB, Validator
  require "Validator.php";
  require "Database.php";
  $config = require "config.php";
  $db = new Database($config);

  // Trim, validēt datus
  $errors = [];

  if (!Validator::email($_POST["email"])) {
    $errors["email"] = "Invalid email";
  }

  if (!Validator::string($_POST["password"], min: 6)) {
    $errors["password"] = "Password too short";
  }

  $query = "SELECT * FROM users WHERE email = :email";
  $params = [":email" => $_POST["email"]];
  $user = $db->execute($query, $params)->fetch();


  // Saglabāsim DB, izmantojot bind params, ar:
  $_POST["email"];
  $_POST["password"];
}


$title = "Register";
require "views/auth/register.view.php";