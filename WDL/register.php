<?php include "includes/header.php";?>
<?php include "includes/nav.php";?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="loginhead">
                <h2><strong>Register</strong></h2>
            </div>

            <?php include "includes/checkdb.php";
    
                if(isset($_POST['submit'])){
                    
                    $username = $_POST['username'];
                    $mobile = $_POST['mobile'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $address = $_POST['address'];


                    $query = "INSERT INTO `users` (`user_name`, `user_mobile`, `user_email`, `user_password`, `user_address` ) VALUES ('$username', '$mobile', '$email', '$password', '$address');";
                    $result = mysqli_query($connection, $query);

                    if($result){
                        echo "Registration Successful";

                    }else{
                        echo "Error: " . $result . "<br>" . mysqli_error($connection);
                    }
                    
                }
            ?>

            <form action="register.php" method="post" id="register_form" class="loginform">
                <div class="form-group login">
                    <label for="username">Full Name</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="eg: Tony Stark">
                </div>

                <div class="form-group login">
                    <label for="mobile">Mobile</label>
                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="eg: 9876543210">
                </div>

                <div class="form-group login">
                    <label for="email">Email Id</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="something@example.com">
                </div>

                <div class="form-group login">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="eg: yourpassword">
                </div>

                <div class="form-group login">
                    <label for="address">Address</label>
                    <textarea class="form-control" name="address" id="address" placeholder="Please enter your permanent address..."></textarea>
                </div>

                <input type="submit" class="btn btn-success btn-block" name="submit" id="submit" value="Submit">
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>