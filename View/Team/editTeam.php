<?php include 'Components/global-css.php'; ?>
<html lang="en">
<body id="home" data-spy="scroll" data-target="#main-nav">

<!--Navigation Bar-->
<?php include 'Components/menu.php'; ?>
<!--/Navigation Bar-->

<!-- SHOWCASE -->
<section id="showcase" class="py-2">
    <div class="primary-overlay text-dark">
        <div class="container">
            <div class="col-lg-6 mt-5 pt-5">
                <h2>Edit Team <?php  echo($team->getName()); ?></h2>
                <form method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="name" name="name"
                               aria-describedby="brandHelp"
                               placeholder="Name" value="<?php echo ($team->getName()) ?>">
                    </div>
<!--                    <div class="mb-3">-->
<!--                        <input type="text" class="form-control" id="points" name="points"-->
<!--                               aria-describedby="modelHelp"-->
<!--                               placeholder="Points" value="--><?php //echo ($team->getPoints()) ?><!--">-->
<!--                    </div>-->
                    <div class="mb-3">
                        <input type="text" class="form-control" id="goals" name="goals"
                               aria-describedby="goalsHelp"
                               placeholder="Goals" value="<?php echo ($team->getGoals()) ?>">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="misses" name="misses"
                               aria-describedby="missesHelp"
                               placeholder="Misses" value="<?php echo ($team->getMisses()) ?>">
                    </div>

                    <div class="form-group">
                        <label for="teamImg" class="text-white">Image</label><br>
                        Profile Image: <input type="file" name="teamImg"> <br>
                        <span>jpg,jpeg,gif and png files only</span>
                    </div>
                    <?php
                    require 'Components/error.php';

                    ?>

                    <button type="submit" class="btn btn-dark">Submit</button>

                </form>


            </div>
        </div>
    </div>


</section>


<!-- FOOTER -->
<?php include 'Components/footer.php';
include 'Components/global-javascript.php'; ?>
<!-- /FOOTER -->

</body>
</html>


