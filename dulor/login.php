<?php
session_start();

if (!empty($_SESSION['username'])) {
  header('location:dashboard.php?hal=home');
}
?>

<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>
    <?php
      include "../setting/conf.php";
          $query = mysql_query("select * from setting");
          while ($buff = mysql_fetch_array($query)) 
          { echo $buff['nama_set']; }
    ?>

  </title>

    <link rel="stylesheet" href="assets/style.css" media="screen" type="text/css" />

</head>

<body>

  <div id="login">
  <form action="../setting/otentifikasi.php" method="POST"> 
    <h1>MASUK</h1>
    <input type="text" name="username" placeholder="username" id="username">
    <input type="password" name="password" placeholder="Password" id="exampleInputPassword2">
    <button type="submit" name="login" value="login">Masuk</button>
  </form>
</div>

  <script src='../asset/scripts/login.js'></script>

</body>

</html>