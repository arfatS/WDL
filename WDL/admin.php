
<?php include "includes/header.php";?>

<div class="container-fluid">

    <div class="row">
        
        <div class="col-2 admin-sidebar position-fixed">
            <p id="welcomeadmin">Welcome Admin</p>
            <a href="" class="sidelink btn">New Food Item</a>
            <a href="" class="sidelink btn">View Food Items</a>
            <a href="" class="sidelink btn">View Users</a>
            <a href="" class="sidelink btn" >View Food Items</a>
        </div>

        <div class="col-10 add-food">
            <h2 id="">Enter food details <span><button class="btn" style="font-size:24px" onclick="foodForm()"><i class="fa fa-plus-square"></i></button></span></h2>
           
            <?php include "checkdb.php";

                if(isset($_POST['submit'])){
                    
                    $foodname = $_POST['foodname'];
                    $foodprice = $_POST['foodprice'];
                    $ingredients = $_POST['ingredients'];
                    $avail = $_POST['avail'];

                    $query = "INSERT INTO `food` (`food_name`, `food_price`, `ingredients`, `availability`) VALUES ('$foodname', '$foodprice', '$ingredients', '$avail')";

                    $result = mysqli_query($connection, $query);

                    if($result){
                        echo "Record Created Successfully";

                    }else{
                        echo "Error: " . $result . "<br>" . mysqli_error($connection);
                    }
                    
                }
            ?>

            <form action="admin.php" method="post" id="food-form">
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


<script>
    function foodForm(){
        document.getElementById('food-form').style.display = "initial";
    }
</script>

