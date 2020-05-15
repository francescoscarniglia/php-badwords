<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>php-badwords | Francesci Scarniglia</title>
</head>
<body>

<!-- START PHP -->
<?php
  $text = 'è uno studente della scuola Boolean';
  $name = $_GET['name'];
  // debug
  //$color = 'blue';

?><!-- END PHP -->

<header>
  <!-- debug -->
  <!-- <p style="color:<?php  echo $color; ?>"> -->
  <p>
    Francesco: <?php echo $text;?>
  </p>
  <p>
    name: <?php echo $name ?>
  </p>
</header>

</body>
</html>
