<?php 

if(count($_COOKIE) === 0){
    echo   ' <p dir="rtl">  کوکی ها غیر فعال هستند برای ذخیره سبد خرید برای دفعات بعد آن را فعال کنید</p>';
 }
?>
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
    <script rel="stylesheet" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <?php include "link.php"?>

    
    <title>Food</title>
    <style>
        .main{
            
            background-image: url("./img/r.avif");
            background-repeat: no-repeat;
            background-size:cover;
        }
        
    </style>
</head>
<body onload="clock()" style="border: 6px solid #000;width: 100%;margin: 0;padding: 0;">
<ul class="navbar-top">
      <div class="brand">
          <img src="./img/logo.png" alt="Logo">
      </div>
      <div class="clock"style="color: blue">
          
      </div>
      <div class="date" >
        
      </div>
     <div class="links">
         <li><a href="index.php">خانه</a></li>
        <li><a href="food.php">غذاها</a></li>
        <li>
           <div class="switch_box">
               <input type="checkbox" onchange="switch_bg(this)" class="input_switch" id="switch" style="display: none;opacity: 0;">
               <label class="switch" for="switch">
                   <i style="color:orange" class="fas fa-sun"></i>
                   <i style="color:lightblue" class="fas fa-moon"></i>
                   <div class="thumb"></div>
               </label>
           </div>
        </li>
        <span onclick='my()' javascript='void(0);' class='icon' >
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
        </span></li>
     </div>
      
  </ul>
  
  
    <br>
    

   
            
            <br>
            <div class="main text-white">
                <h1 class="text-center text-white">خرید</h1>
                <div id="shop_card">
                    
                    <?php
                    $cart=json_decode($_COOKIE['shop'],true);
                    ?>
                     <table style="width: 50%;margin: 0 auto;color: white;background: gold;border-radius: 12px;padding: 10px;">
                     <tr>
                         <th style="padding: 10px;">نام محصول</th>
                         <th style="padding: 10px;">تعداد</th>
                         <th style="padding: 10px;">قیمت</th>
                         </tr>
                     <?php  
                    $total_price=0;
                     foreach ($cart as $key => $val) {
                         $total_price+=$val['price']*$val['qty'];
                 
                         ?>
                             <tr style="padding: 10px;">
                                 <td style="padding: 10px;"><?php echo $val['name'];?></td>
                                 <td style="padding: 10px;"><button class="btn p-1" onclick="qty_sabad(-1,<?php echo $val['id']; ?>)" style="padding: 2px;font-size: .9em;">-  </button><span class="QTY QTY_sabad_<?php echo $val['id']; ?>" style="padding: 5px;"><?php echo $val['qty'];?></span><button class="btn p-1" onclick="qty_sabad(+1,<?php echo $val['id']; ?>)" style="padding: 2px;font-size: .9em;">  +</button></td>
                                 <td style="padding: 10px;" class="PRICE"><?php echo $val['price'];?></td>
                                 <td  id="remove" style="padding: 10px;cursor: pointer;color: red;"  onclick="sabad_action(this,<?php echo $val['id']?>)">حذف</td>
                 
                             </tr>
                             <?php  }?>
                         </table>
                         <span dir="rtl" id="total"> قیمت کلی :<?php echo $total_price ?>0 ريال</span>
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
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="./../slick/slick/slick.min.js"></script>
    <script src="http://localhost/order/users/JS/JaVA.js"></script>
    
   
    
</body>
</html>