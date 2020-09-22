

<!DOCTYPE HTML>
<html>
<head>
    <title>Full Motion</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="./view/style.css">
    <script>const projectName = 'portfolio';</script>
</head>
<body>
<link
        rel="stylesheet"
        href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
        crossorigin="anonymous"
/>
<link
        href="https://fonts.googleapis.com/css?family=Poppins:200i,300,400&display=swap"
        rel="stylesheet"
/>
<link
        href="https://fonts.googleapis.com/css?family=Raleway:700&display=swap"
        rel="stylesheet"
/>
<?php include_once "header.php";

?>

<section id="welcome-section" class="welcome-section">
    <h1>FRESHER2020 - SMARTOSC </h1>
</section>

<!-- START PROJECTS SECTION -->

<section id="projects" class="projects-section">
    <h2 class="projects-section-header">GAME LIST</h2>

    <div class="projects-grid">
        <?php foreach ($games as $key => $game){ ?>
            <a
                    href="index.php?id=<?php echo $game->name; ?>"
                    target="_blank"
                    class="project project-tile"
            >
                <img
                        class="project-image"
                        src="./view/images/<?php echo $game->img; ?>"
                        alt="game"
                />
                <p class="project-title">
                    <span class="code">&lt;</span>
                    <?php echo $game->name; ?>
                    <span class="code">&#47;&gt;</span>
                </p>
            </a>
        <?php }; ?>
    </div>


</section>

<?php include_once "footer.php"; ?>

</body>
</html>