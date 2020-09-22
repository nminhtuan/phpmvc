
<!DOCTYPE HTML>
<html>
<head>

    <title>Full Motion</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="./view/style.css">
    <script>const projectName = 'portfolio';</script>

    <style>



        #page-wrapper {
            position: relative;
        }

        li {
            list-style: none;
        }


        /** global classes styling **/

        .container {
            max-width: 1000px;
            width: 100%;
            margin: 0 auto;
        }



        .grid {
            display: flex;
        }


        #features {
            margin-top: 30px;

        }

        #features .icon {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 125px;
            width: 20vw;
            color: darkorange;
        }

        @media (max-width: 550px) {
            #features .icon {
                display: none;
            }
        }

        #features .desc {
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 125px;
            width: 80vw;
            padding: 5px;
            text-align: left;
        }
        #features h2{
            text-align: left;
        }
        @media (max-width: 550px) {
            #features .desc {
                width: 100%;
                text-align: center;
                padding: 0;
                height: 150px;
            }
        }

        @media (max-width: 650px) {
            #features {
                margin-top: 0;
            }
        }

        #how-it-works {
            margin-top: 50px;
            display: flex;
            justify-content: center;
        }

        #how-it-works > iframe {
            max-width: 560px;
            width: 100%;
        }

        #pricing {
            margin-top: 60px;
            display: flex;
            flex-direction: row;
            justify-content: center;
        }

        .product {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            width: calc(100%  / 3);
            margin: 10px;
            border: 1px solid #000;
            border-radius: 3px;
        }

        .product > .level {
            background-color: #ddd;
            color: black;
            padding: 15px 0;
            width: 100%;
            text-transform: uppercase;
            font-weight: 700;
        }

        .product > h2 {
            margin-top: 15px;
        }

        .product > ol {
            margin: 15px 0;
        }

        .product > ol > li {
            padding: 5px 0;
        }

        .product > button {
            border: 0;
            margin: 15px 0;
            background-color: #f1c40f;
            font-weight: 400;
        }

        .product > button:hover {
            background-color: orange;
            transition: background-color 1s;
        }

        @media (max-width: 800px) {
            #pricing {
                flex-direction: column;
            }
            .product {
                max-width: 300px;
                width: 100%;
                margin: 0 auto;
                margin-bottom: 10px;
            }
        }


    </style>

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
<?php include_once "header.php"; ?>




<section id="projects" class="projects-section">
    <h2 class="projects-section-header">GAME DETAIL</h2>

    <div id="page-wrapper">


        <div class="container">
            <section id="how-it-works">
                <img src="./view/images/<?php echo $game->img; ?>"
                     alt="game" height="700rem">
            </section>
            <section id="features">
                <div class="grid">
                    <div class="icon"><i class="fa fa-3x fa-fire"></i></div>
                    <div class="desc">
                        <h2><?php echo $game->name; ?></h2>
                        <p>
                            -----------------Detail-----------------
                        </p>
                    </div>
                </div>
                <div class="grid">
                    <div class="icon"><i class="fa fa-3x fa-truck"></i></div>
                    <div class="desc">
                        <h2><?php echo $game->cost; ?></h2>
                        <p>
                            How much?
                        </p>
                    </div>
                </div>
                <div class="grid">
                    <div class="icon">
                        <i class="fa fa-3x fa-battery-full" aria-hidden="true"></i>
                    </div>
                    <div class="desc">
                        <h2><?php echo $game->qtt; ?> $</h2>
                        <p>
                            -----------------Quantity-----------------
                        </p>
                    </div>
                </div>
            </section>

            <section id="pricing">
                <div class="product" id="tenor">
                    <div class="level">Not recommend</div>
                    <h2>Free Trial</h2>
                    <ol>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li><li></li><li></li><li></li><li></li><li></li>
                    </ol>
                    <button class="btn">Select</button>
                </div>
                <div class="product" id="bass">
                    <div class="level">Recommend</div>
                    <h2><?php echo $game->cost; ?> $</h2>
                    <ol>
                        <li>Lorem ipsum.</li>
                        <li>Lorem ipsum.</li>
                        <li>Lorem ipsum dolor.</li>
                        <li>Lorem ipsum.</li>
                    </ol>
                    <form action="index.php" method="get">
                        <input type="hidden" value="cart" name="do">
                        <input type="hidden" value="<?php echo $game->cost; ?>>" name="cost">
                        <button type="submit" class="btn">Select</button>
                        <input type="hidden" value="<?php echo $name; ?>" name="nameGame">
                    </form>
                 </div>

            </section>
        </div>
    </div>


   </section>

<?php include_once "footer.php"; ?>

</body>
</html>