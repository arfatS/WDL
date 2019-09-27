<?php include "includes/header.php";?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="loginhead">
                <h2><strong>Register</strong></h2>
            </div>
            <form class="loginform">
                <div class="form-group login">
                    <label for="username">Full Name</label>
                    <input type="text" class="form-control" name="username" id="username">
                </div>

                <div class="form-group login">
                    <label for="mobile">Mobile</label>
                    <input type="text" class="form-control" name="mobile" id="mobile">
                </div>

                <div class="form-group login">
                    <label for="email">Email Id</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>

                <div class="form-group login">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>

                <div class="form-group login">
                    <label for="address">Address</label>
                    <textarea class="form-control" name="address" id="address"></textarea>
                </div>

                <input type="submit" class="btn btn-success btn-block" name="submit" id="submit" value="Submit">
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>