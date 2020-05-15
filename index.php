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
  $text = "è uno studente della scuola Boolean";
  $id_name = $_GET['id_name'];
  $words = explode(' ' , $text);
  $lengthString = strlen($text);
  $replaced = str_replace($id_name, '***', $id_name);
?><!-- END PHP -->

<header>

  <h2>Vars</h2>
  <p>
  <?php echo ucfirst($id_name); ?> : <?php echo $text;?>
  </p>

  <h2> <?php echo ucfirst($id_name);?></h2>
  <p>
    <?php echo $words[0];?>
  </p>
  <p>
    <?php echo $words[1];?>
  </p>
  <p>
    <?php echo $words[2];?>
  </p>
  <p>
    <?php echo $words[3];?>
  </p>

  <p>
    <?php echo $words[4];?>
  </p>

  <p>
    <?php echo $words[5];?>
  </p>

  <p>
    La lunghezza del paragrafo è: <strong> <?php echo $lengthString;?> </strong>
  </p>

  <p>
    Sotituzione stringa : <?php echo $replaced;?>
  </p>

</header>

</body>
</html>
