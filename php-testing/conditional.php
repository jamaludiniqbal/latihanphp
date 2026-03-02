<?php 

  // Define username (this could come from a session, DB, etc)
  $username = "aDMIN";

?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conditional content in PHP</title>
</head>
<body>
  
  <h1>Conditional content in PHP</h1>

  <p>Logged in as: <?php echo $username ?></p>
  <p>Logged in as: <?= $username ?></p>

  <?php if (trim(strtolower($username)) === "admin"): ?>

    <section class="secret">
      <h2>Admin area 🔐</h2>
      <p>This content is ONLY for admin users, it's very secretive!</p>
    </section>

  <?php else: ?>

    <section class="not-secret">
      <h2>Regular user area 🔓</h2>
      <p>Soz, no secret content for you!</p>
    </section>

  <?php endif ?>


<?php if (false): ?>

  <?php
  
  if ($username == "admin") {

    echo "<section class='secret'>";
    echo "  <h2>Admin area 🔐</h2>";
    echo "  <p>This content is ONLY for admin users, it's very secretive!</p>";
    echo "</section>";

  } else {

    echo <<<HTML
    <section class="not-secret">
      <h2>Regular user area 🔓</h2>
      <p>Soz, no secret content for you!</p>
    </section>
    HTML;

    $css = <<<CSS
    .something {
      color: red;
    }
    CSS;

    $sql = <<<SQL

    SELECT *
    FROM   someTable
    WHERE  this = COUNT(*)

    SQL;

  }
  ?>

<?php endif ?>

</body>
</html>