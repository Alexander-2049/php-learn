<?php
$title = "Lesson 1";
$var = "VAR";

include_once 'testFunction.php';

function test()
{
  global $title1;
  echo $title1;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?></title>
</head>

<body>
  <h1><?php echo $title ?></h1>
  <p>PHP version: <?= phpversion() ?></p>
  <p>PHP returns a warning if variable is undefined: <?= $example_variable ?></p>
  <p>String variables are joined by .</p>
  <p><?php echo 'Example <b><code>' . $var . ' </code></b> variable'; ?></p>
  <p><?php echo "Or with \" \" quotes <b><code>$var</code></b>"; ?></p>
  <p>var_dump of variable <code>$x = 5</code>: <?php
  $x = 5;
  var_dump($x);
  ?></p>
  <p>Include test: <?= testFunction() ?></p>
</body>

</html>