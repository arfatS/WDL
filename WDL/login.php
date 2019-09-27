<?php include "includes/header.php";?>


<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="loginhead">
                <!-- <a href="index.php"><img src="images/canteen.png" alt=""></a> -->
                <h2><strong>Login to Canteen</strong></h2>
            </div>
            <form class="loginform">
                <div class="form-group login">
                    <label for="username">User Name</label>
                    <input type="text" class="form-control" name="username" id="username">
                </div>

                <div class="form-group login">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>

                <input type="submit" class="btn btn-success btn-block" name="submit" id="submit" value="Submit">
            </form>

            <div class="loginform" id="register">
                <a href="register.php" class="btn btn-primary btn-lg btn-block">New User?  Register</a>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
