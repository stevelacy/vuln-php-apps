<?php

$title = null;
if (isset($_POST['search'])) {
  $title = $_POST['search'];
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>You searched for:: <?=$title?></title>
</head>
<body>

  <div><?php echo $_GET['test'];?></div>
  <form method="post" action="<?= $_SERVER['PHP_SELF']?>">
    <input type="text" name="search" />
    <input type="submit" />
  </form>
</body>
</html>
