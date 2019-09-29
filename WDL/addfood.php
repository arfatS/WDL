<?php
    session_start();
    if($_SESSION['admin'] != true){
        header("location:admin.php");
    }
    
    include "includes/header.php";
    include "includes/nav.php";
?>
<div class="container">

    <div class="row">
        
        <div class="col-md-5 add-food">
            <h2>Enter food details</h2>
            
            <?php include "includes/checkdb.php";

                if(isset($_POST['submit'])){
                    
                    $foodname = $_POST['foodname'];
                    $foodprice = $_POST['foodprice'];
                    $ingredients = $_POST['ingredients'];
                    $avail = $_POST['avail'];

                    $query = "INSERT INTO `food` (`food_name`, `food_price`, `ingredients`, `availibility`) VALUES ('$foodname', '$foodprice', '$ingredients', '$avail');";
                    $result = mysqli_query($connection, $query);

                    if($result){
                        echo "Record Created Successfully";

                    }else{
                        echo "Error: " . $result . "<br>" . mysqli_error($connection);
                    }
                    
                }
            ?>

            <form action="addfood.php" method="post">
                <div class="form-group">
                    <label for="foodname">Food Name</label>
                    <input type="text" class="form-control" name="foodname" id="food-name">
                </div>

                <div class="form-group">
                    <label for="foodprice">Food Price</label>
                    <input type="text" class="form-control" name="foodprice" id="food-price">
                </div>

                <div class="form-group">
                    <label for="ingredients">Ingredients</label>
                    <input type="text" class="form-control" name="ingredients" id="ingredients">
                </div>

                <div class="form-group">
                    <label for="avail">Availability</label>
                    <input type="text" class="form-control" name="avail" id="avail">
                </div>

                <button type="submit" name="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
        

    </div>
</div>


