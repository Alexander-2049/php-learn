<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lessons</title>
</head>

<body>
  <?php
  foreach (glob('./*', GLOB_ONLYDIR) as $dir) {
    $dirname = basename($dir);
    echo "<a href=\"/$dirname\">$dirname</a>";
  }
  ?>
</body>

</html>