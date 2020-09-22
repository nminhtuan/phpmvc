

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


<!-- START PROJECTS SECTION -->

<section id="projects" class="projects-section">
    <h2 class="projects-section-header">CART</h2>

    <div class="projects-grid">
        <?php foreach ($_SESSION as $key => $item){
            if($item=="admin"){}else{
            ?>
            <a
                    href="#"
                    class="project project-tile"
            >
                <img
                        class="project-image"
                        src="./view/images/<?php echo $item; ?>"
                        alt="game"
                />
                <p class="project-title">
                    <span class="code">&lt;</span>
                    <?php echo item ?>
                    <span class="code">&#47;&gt;</span>
                </p>
            </a>
        <?php }
                }; ?>
    </div>


</section>

<?php include_once "footer.php"; ?>

</body>
</html>