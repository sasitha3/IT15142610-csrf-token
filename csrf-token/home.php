<?php 
  session_start();
?>
<html>

<head>
  <link rel="shortcut icon" type="image/x-icon" href="logo-black.png"/>
  <link href="home.css" rel="stylesheet" id="bootstrap-css">
  <!-- <meta name="theme-color" content="#daa37f"> -->
  <title>CSRF Attack PREVENT - Homepage</title>
</head>

<body >
<div class="banner">
  <div class="banner__overlay">
    <div class="banner__container">
      <h1 class="banner__title">WELCOME <?php echo $_SESSION["username"]; ?></h1>
      <form method="POST" action="profile.php">
        <input type="hidden" name="token" id="token" value = <?php if(isset($_SESSION['csrf_token']))echo $_SESSION['csrf_token'];?> >
        <input type="submit" class="btn " value="CLICK HERE" />
      </form>
    </div>
    </div>
</div>

</body>
</html>