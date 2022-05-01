<html>

<head>
    <title>Food</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script rel="stylesheet" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="http://localhost/order/users/JS/search.js"></script>
    <?php include "link.php"?>
    <style>
        @media screen and (max-width:700px){
            .menu-food{
                margin-top: 20px;
               
            }
           .menu-food .cards {
               display: grid;
               grid-template-columns: auto;
           }
           .menu-food .cards{
                display: grid;
                grid-template-columns: auto;
            }
            .menu-food .cards .card .desc{
                    display: flex;
                   flex-direction: column;
            }
            .menu-food .cards .card .desc .img-card{
                width: 50%;margin: 0 auto;
            }
            .menu-food .cards .card .desc .img-card{
                width: 100%;
            }
        }
    </style>
</head>
<body onload="clock()" class=''>
 <?php include "navbar.php"; ?>
  <br>
    <div id="awite"></div>
    <div id="find_ifram" display="none"></div>
    <div id="result_search" style="display:none"><</div>

  <div class="exprore-foods">
      <h2 class="text-center">سفارشات برتر</h2>
      <br>
      <div class="imgs">
          <div class="box">
              <div class="img">
                  <img src="img/burger.jpg" alt="">
              </div>
              <div class="text">
                <h5 class="text-center">همبرگر</h5>
              </div>

          </div>
          <div class="box">
              <div class="text">
                <h5 class="text-center">مومو</h5>
              </div>
              <div class="img">
                  <img src="img/momo.jpg" alt="gi">
              </div>

          </div>
          <div class="box">
              <div class="img">
                  <img src="img/pizza.jpg" alt="">
              </div>
              <div class="text">
                  <h5 class="text-center">پیتزا</h5>
              </div>

          </div>
    </div>
  </div>
  <div class="menu-food" style='margin-top: 450px;'>
      <br>
      <br>
    <br>
    <div class="cards"> 

    <?php  include "products_server.php"; ?>
    </div>
        <br>
        <br>
        <br>
        
    </div>
    <div class="see-all" dir='rtl'>
        <a href="food.php" class="text-center btn bg-info">ببین همه رو</a>
    </div>
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
            <script src="http://localhost/order/users/JS/JAva.js"></script>
    </body>







</html>