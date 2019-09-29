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
        <div class="col-md-12 view">
            <h2>Food Items</h2>
            
            <?php include "includes/checkdb.php";

                $query = "select * from food";
                $result = mysqli_query($connection, $query);
                if(!$result){
                        echo "Error: " . $result . "<br>" . mysqli_error($connection);
                }
                if(mysqli_num_rows($result) == 0){
                    echo "No food to display" . "<br>";
                }
            ?>
            
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Avalibility</th>  
                        </tr>
                    </thead>
                    <tbody>
    
    
                    <?php
                        $no=1;
    
                        while($row = mysqli_fetch_assoc($result)){
                    ?>
                            <tr>
                                <td><?php echo $no ?> </td>
                                <td><?php echo $row['food_name'] ?></td>
                                <td><?php echo $row['food_price'] ?></td>
                                <td><?php echo $row['availibility'] ?></td>
                            </tr>
                    <?php
                        $no+=1;
                        }
                    ?>
    
                     
                    </tbody>
                </table>
            </div>

       </div>
       

    </div>
</div>


