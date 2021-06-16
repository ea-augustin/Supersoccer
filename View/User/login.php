<?php include 'Components/global-css.php'; ?>

<!--Navigation Bar-->
<?php include 'Components/menu.php'; ?>
<!--/Navigation Bar-->

<div class="container">
    <div class="">
        <form method="post">

            <h1>Login</h1>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="username"
                       value="<?php echo((isset($lastentered['username'])) ?
                           $lastentered['username'] : '')
                       ?>">
                <div id="usernameHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <?php
            require 'Components/error.php';
            ?>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>


<?php include 'Components/footer.php'; ?>
<?php include 'Components/global-javascript.php'; ?>

