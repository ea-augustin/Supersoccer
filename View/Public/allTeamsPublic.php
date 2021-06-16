<?php include 'Components/global-css.php';
?>

<html lang="">
<body id="home" data-spy="scroll" data-target="#main-nav">

<!--Navigation Bar-->
<?php include 'Components/menu.php'; ?>
<!--/Navigation Bar-->

<!-- SHOWCASE -->
<section class="py-5 mt-5">

    <div class="primary-overlay ">
        <div class="container">
            <h1> Public Team View</h1>

            <table class="table text-center">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Points</th>
                    <th scope="col"><i class="fas fa-futbol bg-light"></i></th>
                    <th scope="col"><i class="fas fa-skull"></i></th>
                    <th scope="col">Image</th>
                    <th scope="col">Details</th>
                </tr>
                </thead>
                <tbody>
                <?php

                foreach ($teams as $team) {


                    echo('
                    <tr>
                    <td>' . $team->getId() . '</td>
                    <td>' . $team->getName() . '</td>
                    <td>' . $team->getPoints() . '</td>
                    <td>' . $team->getGoals() . '</td>
                     <td>' . $team->getMisses() . '</td>
                    <td><img src="images/team/' . $team->getimage() . ' " style="height:100px; width:100px;" alt=' .
                        $team->getName() . '></td>
                    <td class=""><a href="index.php?controller=team&action=details&id=' . $team->getId() . ' "><i class="fas fa-binoculars bg-light"></i></a></td>  
         
                </tr>
                    ');
                }
                ?>

                </tbody>
            </table>
        </div>
    </div>


</section>



<?php include 'Components/footer.php'; ?>
<?php include 'Components/global-javascript.php'; ?>
