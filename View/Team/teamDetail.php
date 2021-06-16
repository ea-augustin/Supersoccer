<?php include 'Components/global-css.php';
?>
<body id="home" data-spy="scroll" data-target="#main-nav">

<!--Navigation Bar-->
<?php include 'Components/menu.php'; ?>
<!--/Navigation Bar-->

<!-- SHOWCASE -->
<main class="mt-5">
    <div class="container">
        <h2><a href="index.php?controller=team&action=list"> <i class="fa fa-arrow-left"></i></a></h2>
    </div>
    <section>
        <div class="container">
            <div class="jumbotron text-center outline-danger">
                <h1 class="display-4"><?php echo($team->getName()) ?></h1>
                <img style="max-width:200px" src="<?php echo('images/team/'.$team->getImage()); ?>"
                     alt="User Image <?php echo($team->getName()); ?>">
                <p class="lead">Points: <?php echo($team->getPoints()) ?></p>
                <hr class="my-4">
                <p><i class="fas fa-futbol"></i><?php echo($team->getGoals()) ?></p>
                <p><i class="fas fa-skull"></i><?php echo($team->getMisses()) ?></p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                </p>
            </div>
        </div>
    </section>
</main>


<!-- FOOTER -->
<?php include 'Components/footer.php';
include 'Components/global-javascript.php'; ?>
<!-- /FOOTER -->

</body>
</html>


