<!DOCTYPE HTML>
<html>
<head>
  <title>2. periood I praktikum</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style.css" type="text/css">

</head>
<body>
  <h1>First page</h1>
    <?php
      $link_file = "sec_page.php";
      $age = 32;
    ?>
   
   <a href="<?php echo "{$link_file}?age={$age}"; ?>">Teisele lehele</a><br>
    <?php 
      print_r($_GET); echo "<br>";
      echo $_GET["name"];
      $jada = array("syret", "21"); echo "<br>";
      echo $jada[1];
    ?>
</a>
</body>
</html>
