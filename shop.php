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
<script src="http://localhost/order/users/JS/SHop.js"></script>
    



    
    <title>Food</title>
    <style>
        .main{
            
            background-image: linear-gradient(white,gold);
            background-repeat: no-repeat;
            background-size:cover ;
            border: none;
        }
        
        
        /* .main{
        } */
        
    </style>
</head>
<body onload="clock()" style="width: 100%;margin: 0;padding: 0;">
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
            <div id="fill_text" style="display: none;"></div>
            <div class="main text-white">
                <div id="COOKIE" style="display: none;"><?php echo $_COOKIE['shop']; ?></div>
                <h1 class="text-center text-white">خرید</h1>
                <div id="shop_card">
                     
                    <?php
                    $cart=json_decode($_COOKIE['shop'],true);
                    $total_price=0;
                    ?>
                     <button onclick="sabad_action(this)" id="empty"  style="border: none;outline:none;padding: 2px;">حذف همه</button>
    
                <table style="width: 100%;color: white;background: gold;border-radius: 12px;">
                <tr>
                    <th>نام محصول</th>
                    <th>تعداد</th>
                    <th>قیمت</th>
                    </tr>
                <?php  
                
                foreach ($cart as $key => $val) {
                    $total_price+=$val['price']*$val['qty'];

                    ?>
                        <tr>
                            <td><?php echo $val['name'];?></td>
                            <td><button class="btn p-1" onclick="qty_sabad(-1,<?php echo $val['id']; ?>,'add')" style="padding: 2px;font-size: .9em;">-  </button><span id="qty_<?php echo $val['id']?>" class="QTY QTY_sabad_<?php echo $val['id']; ?>" style="padding: 5px;"><?php echo $val['qty'];?></span><button class="btn p-1" onclick="qty_sabad(+1,<?php echo $val['id']; ?>,'add')" style="padding: 2px;font-size: .9em;">  +</button></td>
                            <td class="PRICE"><?php echo $val['price'];?></td>
                            <td id="remove" style="cursor: pointer;color: red;"  onclick="sabad_action(this,<?php echo $val['id']?>)">حذف</td>

            </tr>
            <?php  }?>
        </table>

       
        <span dir="rtl" id="total"> قیمت کلی :<?php echo $total_price ?>0 ريال</span>
                </div>
                <form action="#" method="post" id="form_shop" class="Form">
                    
                        <div class="form-group d-grid ">
                            <input type="text" id="name" name="fname" placeholder="نام">
                        </div>
                        <div class="form-group d-grid ">
                            <input type="tel" id="tel" name="tel" placeholder="شماره موبایل">
                        </div>

                    
                    <div class="form-group ">
                        <textarea name="address"" id="address" id="" cols="30" rows="10" placeholder="آدرس" ></textarea>
                    </div>
                    <div class="form-group ">
                        <button style="border: 1px solid white;" id="pool" class="pardaght btn btn-m text-white ">خرید نقدی</button>
                        <button style="border: 1px solid white;" id="electro" class="pardaght btn btn-m text-white ">خرید الکترونیکی</button>
                    </div>
                </form>
                
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