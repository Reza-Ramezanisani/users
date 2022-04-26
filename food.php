<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./../slick/slick/slick.css">
    <link rel="stylesheet" href="./../slick/slick/slick-theme.css">
    <link rel="stylesheet" href="er.css">
    <link rel="stylesheet" href="awite.css">
    
    <script rel="stylesheet" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="search.js"></script>
    
    <title>Food</title>
</head>
<body onload="clock()">
 <?php include "navbar.php";  ?>
    
    <br>
    <div id="awite"></div>
    <div id="find_ifram" display="none"></div>
    <div id="result_search" style="display:none"><</div>

    <div class="exprore-foods">
        <h2 class="text-center">گالری</h2>
        <br>
        <div class="slick">
            <div><img src="./img/menu-momo.jpg" alt=""></div>
            <div><img src="./img/menu-burger.jpg" alt=""></div>
            <div><img src="./img/menu-pizza.jpg" alt=""></div>
            <div><img src="./img/momo.jpg" alt=""></div>
            <div><img src="./img/pizza.jpg" alt=""></div>
            <div><img src="./img/burger.jpg" alt=""></div>
        </div>
    </div>
    <div class="menu-food" style="margin-top:0">
        <br>
        <br>
      <h2 class="text-center">غذای دلخواهت رو سفارش بده</h2>
      <br>
      <div class="cards"></div>
        
            
            <br>
            
            
            
        
    <div class="footer">
        <div class="text-center p-3">
            <a href="#"><i class="fas fa-rss text-danger"></i></a>
            <a href="#"><i class="fas fa-laptop-code text-danger"></i></a>
        </div>
        <p class="text-center">All rights reserved. Designed By Reza</p>
    </div>
    
    
      
      
      
      
    
    
    
    
    
    
    
    
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="./../slick/slick/slick.min.js"></script>
    <script src="JA.js"></script>
   <script>
       $(document).ready(function () {
        $(".slick").slick({
            slidesToShow:4,
        slidesToScroll:2,
        infinity:true,
        dots:true,
        arrows:true,
        speed:600,
        responsive:[
            {
                breakpoint:1024,
                settings:{
                    slidesToShow:4,
                    slidesToScroll:2,
                    }
                },
                {
                    breakpoint:800,
                    settings:{
                        slidesToShow:3,
                        slidesToScroll:2,
                    }
                },
                {
                    breakpoint:600,
                    settings:{
                        slidesToScroll:2,
                        slidesToShow:2,
                        centerMode:true,
                        centerPadding:"40px",
                        
                    }
                }
            
            ]


        });
    });
        
   </script>
    
    
</body>
</html>