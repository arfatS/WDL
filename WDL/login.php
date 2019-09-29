<?php 
    include "includes/header.php";
    include "includes/nav.php";

    session_start();

    if(isset($_POST['submit'])){

        include "includes/checkdb.php";
                    
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "select * from users";

        $result = mysqli_query($connection, $query);
        if(!$result){
                echo "Error: " . $result . "<br>" . mysqli_error($connection);
        }

        if(mysqli_num_rows($result) == 0){
            echo "No users in the database" . "<br>";
        }

        while($row = mysqli_fetch_assoc($result)){
            $dbUserName = $row['user_name'];
            $dbUserPass = $row['user_password'];

            if($username == $dbUserName && $password == $dbUserPass){
                $_SESSION['user'] = true;
                break;
            }
        }    
    }



    if($_SESSION['user'] == true){
        header("location:profile.php");

    }else{
?>

    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>

            <div class="col-md-4">
                <div class="loginhead">
                    <!-- <a href="index.php"><img src="images/canteen.png" alt=""></a> -->
                    <h2><strong>Login to Canteen</strong></h2>
                </div>
                <form action="login.php" method="post" class="loginform">
                    <div class="form-group login">
                        <label for="username">User Name</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="User Name">
                    </div>

                    <div class="form-group login">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
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

<?php
    }
?>
