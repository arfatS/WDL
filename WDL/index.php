<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Canteen Management System</title>
    <link rel="icon" href="images/canteen.png" type="image/icon type">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet"> 
    <style>
       
        body {
            font-family: 'Comfortaa', cursive;
            height: 100vh;
            background-image: linear-gradient(to right,rgb(179, 162, 253,0.7),rgb(73, 43, 243,0.7)), url("images/food.jpg");
            /* background-image: linear-gradient(to right,rgba(242, 255, 55, 0.8), rgba(255, 145, 0, 0.8)), url("food.jpg"); */
            background-size: cover;
            background-position: bottom;

            position : relative;
            
        }
    
        a {
            position : absolute;
            top : 70%;
            left : 50%;
            transform : translate(-50%, -50%);
            /* height : 80px;
            width : 160px;
        } */
    }
        h1 {
            position : absolute;
            top : 20%;
            left : 0;
            width : 100%;
            text-align : center;

            font-size : 50px;
            /* transform : translateX(-50%); */
        }

        footer {
            position : absolute;
            bottom : 0;
            left : 10px;
        }
    </style>

</head>
<body>

    <p class="text-center">Eat ~~ Sleep ~~ Repeat</p>
    <h1>Welcome to Canteen Management System</h1>
    <a href="menu.php" class="btn btn-danger btn-lg">OPEN</a>

    <footer>
        <p>&copy;All rights reserved. 2019</p>
    </footer>

    
</body>
</html>