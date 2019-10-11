<?php
    include "includes/header.php";

    session_start();

    if(isset($_POST['submit'])){

        include "includes/checkdb.php";
                    
        $adminname = $_POST['adminname'];
        $password = $_POST['password'];

        $query = "select * from admin";

        $result = mysqli_query($connection, $query);
        if(!$result){
                echo "Error: " . $result . "<br>" . mysqli_error($connection);
        }

        if(mysqli_num_rows($result) == 0){
            echo "No admin in the database" . "<br>";
        }

        while($row = mysqli_fetch_assoc($result)){
            $dbAdminName = $row['admin_name'];
            $dbAdminPass = $row['admin_password'];

            if($adminname == $dbAdminName && $password == $dbAdminPass){
                $_SESSION['admin'] = true;
                break;
            }
        }    
    }
?>

<?php 
    if($_SESSION['admin'] == true)
{
?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="index.php"><img src="images/canteen.png" alt="Canteen" id="logo"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ml-3"><a class="nav-link" href="menu.php">Menu</a></li>
                <li class="nav-item ml-3"><a class="nav-link" href="order.php">Order</a></li>
                <li class="nav-item ml-3"><a class="nav-link" href="about.php">About</a></li>
                <li class="nav-item ml-3"><a class="nav-link" href="contact.php">Contact Us</a></li>
                <li class="nav-item ml-3"><a class="nav-link" href="login.php">Login</a></li>
                <li class="nav-item ml-3"><a class="nav-link" href="admin.php">Admin</a></li>           
            </ul>

            <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
            </form> -->

            <div class="my-2 my-lg-0">
                <a href="logout.php" class="btn btn-success">Logout</a>
            </div>

        </div>
    </nav>
<?php
    }
    else
    {
        include "includes/nav.php";

    }
?>


<div class="container-fluid">

    <div class="row">


        <?php 
            if($_SESSION['admin'] == true)
        {
        ?>
            <div class="col-md-2 admin-sidebar position-fixed">
                <p id="welcomeadmin">Welcome Admin</p>
                <a href="viewusers.php" class="sidelink btn">View Customers</a>
                <a href="addfood.php" class="sidelink btn">Add Food Item</a>
                <a href="viewfood.php" class="sidelink btn">View Food Items</a>
            </div>
        <?php
        }
            else
        {
        ?>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="loginhead">
                    <h2><strong>Admin Login</strong></h2>
                </div>
                <form action="admin.php" method="post" id="admin_form" class="loginform">
                    <div class="form-group login">
                        <label for="adminname">Admin Name</label>
                        <input type="text" class="form-control" name="adminname" id="adminname" placeholder="eg: arfat">
                    </div>
    
                    <div class="form-group login">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="eg: arfat">
                    </div>

                    <input type="submit" class="btn btn-success btn-block" name="submit" id="submit" value="Submit">
                </form>
            </div>
            <div class="col-md-4"></div>

        <?php
        }    
        ?>
    </div>
</div>


