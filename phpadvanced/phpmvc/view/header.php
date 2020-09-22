<nav id="navbar" class="nav">
    <ul class="nav-list">
        <li>
            <a href="index.php">Home</a>
        </li>
        <li>
            <a href="#projects">Show</a>
        </li>
        <li>
            <a href="#contact">Contact</a>
        </li>

        <?php if (isset($_SESSION['user']) && $_SESSION['user']){?>
            <li> <a href="index.php?do=insert"> Add Game</a> </li>
            <li> <a href="index.php?do=logout"> Logout  </a></li>
        <?php } else{ ?>
            <li> <a href="index.php?do=login"> Login  </a></li>
            <li> <a href="registration.php" target="_blank"> Registration  </a></li>
        <?php } ?>
        <li> <a href="index.php?do=cart"> Cart  </a></li>
    </ul>
</nav>
<!-- START WELCOME SECTION -->


<!-- END WELCOME SECTION -->
