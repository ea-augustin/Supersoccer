<div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php?controller=public&action=list">SUPER <i class="far fa-futbol
            fa-sm"></i> SOCCER</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php?controller=team&action=list"><i class="fas fa-poll-h fa-lg"></i></a>
                    </li>


                    <?php

                    if (empty($_SESSION) && !isset($_SESSION['user'])) {
                        echo(' <li class="nav-item">
                    <a href="index.php?controller=user&action=login" class="nav-link"><i class="fas fa-user"></i>Login</a>
                </li>');
                    } else {
                        echo('<li class="nav-item">
                    <a href="index.php?controller=user&action=logout"  class="nav-link"><i class="fas fa-sign-out-alt"></i>Logout</a>
                </li>');
                    }
                    ?>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

</div>


