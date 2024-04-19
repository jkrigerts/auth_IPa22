<?php require "../views/components/head.php" ?>

<form method="POST">
  <h1>Login</h1>
  <label>
    email:
    <input name="email" value="<?= $_POST["email"] ?? "" ?>"/>
  </label>
  <label>
    Password: 
    <input name="password" />
  </label>
  <?php if (isset($errors["email"])) { ?>
    <p style="color:red"><?= $errors["email"] ?></p>
  <?php } ?>
  <button>Login</button>
</form>

<?php require "../views/components/footer.php" ?>