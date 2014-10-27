<!DOCTYPE HTML>
<html>
<head>
  <title>2. periood I praktikum</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css" type="text/css">

</head>
<body>
  <?php $page_link = "second_page.php";
    $name = "Syret";
    $lastname = "Kärt";
    $age = 21; ?>
    <a href="<?php echo $page_link.'?name='.$name."&lastname=".$lastname."&age=".$age; ?>">Teisele lehele</a>
    <?php $example = array("name" => "Syret", "lastname" => "Kärt"); ?><br>
    <?php echo $_GET["test"]; ?>
</body>
</html>
