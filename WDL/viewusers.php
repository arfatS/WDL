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
            <h2>Our Customers</h2>
            
            <?php include "includes/checkdb.php";

                $query = "select * from users";
                $result = mysqli_query($connection, $query);
                if(!$result){
                        echo "Error: " . $result . "<br>" . mysqli_error($connection);
                }
                if(mysqli_num_rows($result) == 0){
                    echo "No customers registered" . "<br>";
                }
            ?>


            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                            <th scope="col">Address</th>  
                        </tr>
                    </thead>
                    <tbody>
    
    
                    <?php
                        $no=1;
                        while($row = mysqli_fetch_assoc($result)){
                    ?>
                            <tr>
                                <td><?php echo $no ?> </td>
                                <td><?php echo $row['user_name'] ?></td>
                                <td><?php echo $row['user_mobile'] ?></td>
                                <td><?php echo $row['user_email'] ?></td>
                                <td><?php echo $row['user_password'] ?></td>
                                <td><?php echo $row['user_address'] ?></td>
    
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


