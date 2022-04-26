<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="sy.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script rel="stylesheet" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   
    <script src="JQOrder.js"></script>
</head>
<body onload="clock()">
    <ul class="navbar-top">
        <div class="brand">
            <img src="./img/logo.png" alt="Logo">
        </div>
        <div class="clock">
            
        </div>
        <div class="date">
          
        </div>
       
       <div class="links">
           <li><a href="#">Home</a></li>
           <li class="dropdown">
               <button class="btn-drop btn">List <i class="fas fa-caret-down"></i></button>
               <div class="dropdown-content">
                   <a href="#">1</a>
                   <a href="#">2</a>
                   <a href="#">3</a>
                   <a href="#">4</a>
               </div>
           </li>
          <li><a href="#">Category</a></li>
          <li><a href="food.html">Foods</a></li>
          <li><a href="#">Contact</a></li>
          <span onclick='my()' javascript='void(0);' class='icon' >
                  <div class="bar"></div>
                  <div class="bar"></div>
                  <div class="bar"></div>
          </span></li>
       </div>
        
    </ul>
   
    <div class="box-order" >
        <br><br>
        <h2 class="text-center" >Fill this form to confirm your order</h2>
        <br>
        <div class="food-order" >
            <span class="ribbon"></span>
        <?php   
            require "db_menu.php";
            $sql = "SELECT * FROM menu WHERE ID='{$_GET['id']}'";
            $result= mysqli_query($conn,$sql);
            while ($row= mysqli_fetch_assoc($result)) {
            echo '
            <img class="img-order" src="./../admin/PHP/upload_menu/'.$row['img'].'" alt="">
            <div class="desc-order">
                <h3 style="font-weight: bold;" class="">'.$row['name_menu'].'</h3>
                <h4 style="font-weight: bold;" class="">$'.$row['price'].'</h3>
                 <div  style="font-weight: bold;">No</div>
                 <input class="form-control" min="1" form="form" value="1" type="number" formaction="" name="no" id="">
            </div>
         </div>
         <br>
         <div class="food-order2"  style="width: 100%">
             <br>
             <form action="#" id="form" method="post">
             <input type="hidden" name="id_order" value="'.$_GET['id'].'" id="">
               <div class="form-group">
                   <input type="text" name="fname" pattern="[a-zA-Z]{8}">
                   <label>Fullname</label>
                   <span></span>
                   
               </div>
               <div class="form-group">
                   <input type="email" name="mail">
                   <label>Email</label>
                   <span></span>
               </div>
               <p>شماره تلفن همراه </p>
               <div class="form-group">
               <input type="tel" name="tel">
                   <label>Tel</label>
                   <span></span>
               </div>
               <p>Address:</p>
               <div class="form-group">
                   <textarea name="adderss" id="" cols="30" rows="10"></textarea>
                   <span class="cover"></span>
               </div>
               <input type="submit" value="Submit"id="sub" class="form-control">
 
             </form>
            ';
            }

        ?>
           
        </div>
        <div id='fill_text' style="display: none;">
            hello
        </div>
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
    <script src="DS.js"></script>
</body>
</html>