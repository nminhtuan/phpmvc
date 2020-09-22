<!-- Sidebar (hidden by default) -->
<body>
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-bar-item w3-button">Close Menu</a>
  <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button">Home</a>
  <?php if (isset($_SESSION['user']) && $_SESSION['user']){?>
      <a href="index.php?do=insert" onclick="w3_close()" class="w3-bar-item w3-button">Add game</a>
      <a href="index.php?do=logout" onclick="w3_close()" class="w3-bar-item w3-button">Log out</a>
  <?php } else{ ?>    
      <a href="index.php?do=login" onclick="w3_close()" class="w3-bar-item w3-button">Sign in</a>
      <a href="registration.php" onclick="w3_close()" class="w3-bar-item w3-button">Registration</a>
  <?php } ?>
</nav>

<!-- Top menu -->
<div class="w3-top">
  <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
    <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
    <div class="w3-center w3-padding-16">Gaming shop</div>
  </div>
</div>
</body>