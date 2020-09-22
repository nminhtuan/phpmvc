<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}
</style>
<body>

<?php include_once "header.php"; ?>
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

 
  <!-- Second Photo Grid-->
  <?php foreach ($games as $key => $game){ ?>
    <div class="w3-quarter">
    <a
                    href="index.php?id=<?php echo $game->name; ?>"
                    class="project project-tile"
            >
      <img src="./view/images/<?php echo $game->img; ?>"  style="width:100%">
      <h3> <?php echo $game->name; ?></h3>
    </a>
    </div>
  <?php } ?>

  </div>
 <?php include_once "footer.php"; ?>
 
</body>
</html>