<?php 
session_start();
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
    <script src="http://localhost/order/users/JS/Search.js"></script>
    <?php include "link.php"?>

    
    <title>Food</title>
    <style>
        /* .dropdown .dropdown-content .shop_card{
                   width: 400px;
                   border: 4px solid #000;
                   
               } */
      


    </style>
</head>
<body onload="clock()" style="border: 6px solid #000;width: 100%;margin: 0;padding: 0;">
 <?php include "navbar.php";  ?>
    
    <br>
    <div id="awite"></div>
    <div id="find_ifram" display="none"></div>
    <div id="result_search" style="display:none"><</div>

    <div class="exprore-foods">
      <div class="content">
          <div class="img-content"> <img style="width:100%;height:100%;object-fit:content" src="./img/pizza.jpg" alt="" srcset=""> </div>
          <div class="txt-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio quibusdam, officiis molestiae libero quod deleniti eius? Ducimus provident corporis vero dignissimos maiores? Quas modi impedit ad totam harum est reiciendis.
          Repudiandae doloribus dignissimos ipsa ipsam, possimus, ea porro ratione obcaecati asperiores ex nam sed repellat molestiae cum eum in ullam provident quos magni quidem commodi fuga eligendi tempora? Asperiores, vero.
          Ullam deserunt, eligendi earum nam, unde aut nemo distinctio veritatis incidunt, harum deleniti. Deleniti provident vero, ut molestiae architecto esse voluptates! Sapiente vero non cum porro? Architecto debitis vitae aut?
          Voluptatibus sapiente adipisci fuga qui deleniti maxime porro consequatur dignissimos aliquam necessitatibus ut, ex omnis sit exercitationem, quas odio eos minima, eius eveniet aperiam culpa minus cumque. Optio, dolore accusantium.
          Voluptas at, nobis vitae eveniet laboriosam officia magni, voluptatem impedit expedita velit in placeat omnis. Cumque, ratione dignissimos necessitatibus officiis atque at ullam, deserunt corrupti recusandae quos fuga eveniet ea.
          Vel, autem eum dolore fugit hic atque cumque ex voluptatibus deleniti inventore dolorem rem, dolor exercitationem perferendis repudiandae? Rerum, rem praesentium quam repellat modi facere molestias culpa voluptas sapiente recusandae.
          Odio excepturi sequi, asperiores iste quis repudiandae adipisci perspiciatis in iusto quasi, architecto velit aliquid molestiae et dolore soluta! Quo similique cupiditate velit natus! Quisquam pariatur in dolorem placeat laborum.
          Odit necessitatibus pariatur inventore cumque? Non, illo doloribus. Modi delectus molestias, molestiae dolore incidunt nesciunt et reiciendis iste officia corporis sequi laboriosam natus nulla sapiente impedit illo dolores est blanditiis.
          Dolores numquam est pariatur ducimus, tempore hic, quod deserunt ex, perspiciatis voluptate tempora repellat sint commodi iste! Odit dignissimos sapiente necessitatibus, placeat sequi voluptas eum quas quidem, molestiae optio voluptatem.
          Ab odio qui cum illum reprehenderit minus. Debitis ipsa modi quia quaerat delectus corporis eius rem non mollitia itaque quae, alias fugit! Expedita perferendis commodi eveniet ipsum veritatis cumque porro.;object-fit:content</div>
      </div>
      <div class="content">
          <div class="img-content"> <img style="width:100%;height:100%;object-fit:content" src="./img/a.jpg" alt="" srcset=""> </div>
          <div class="txt-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio quibusdam, officiis molestiae libero quod deleniti eius? Ducimus provident corporis vero dignissimos maiores? Quas modi impedit ad totam harum est reiciendis.
          Repudiandae doloribus dignissimos ipsa ipsam, possimus, ea porro ratione obcaecati asperiores ex nam sed repellat molestiae cum eum in ullam provident quos magni quidem commodi fuga eligendi tempora? Asperiores, vero.
          Ullam deserunt, eligendi earum nam, unde aut nemo distinctio veritatis incidunt, harum deleniti. Deleniti provident vero, ut molestiae architecto esse voluptates! Sapiente vero non cum porro? Architecto debitis vitae aut?
          Voluptatibus sapiente adipisci fuga qui deleniti maxime porro consequatur dignissimos aliquam necessitatibus ut, ex omnis sit exercitationem, quas odio eos minima, eius eveniet aperiam culpa minus cumque. Optio, dolore accusantium.
          Voluptas at, nobis vitae eveniet laboriosam officia magni, voluptatem impedit expedita velit in placeat omnis. Cumque, ratione dignissimos necessitatibus officiis atque at ullam, deserunt corrupti recusandae quos fuga eveniet ea.
          Vel, autem eum dolore fugit hic atque cumque ex voluptatibus deleniti inventore dolorem rem, dolor exercitationem perferendis repudiandae? Rerum, rem praesentium quam repellat modi facere molestias culpa voluptas sapiente recusandae.
          Odio excepturi sequi, asperiores iste quis repudiandae adipisci perspiciatis in iusto quasi, architecto velit aliquid molestiae et dolore soluta! Quo similique cupiditate velit natus! Quisquam pariatur in dolorem placeat laborum.
          Odit necessitatibus pariatur inventore cumque? Non, illo doloribus. Modi delectus molestias, molestiae dolore incidunt nesciunt et reiciendis iste officia corporis sequi laboriosam natus nulla sapiente impedit illo dolores est blanditiis.
          Dolores numquam est pariatur ducimus, tempore hic, quod deserunt ex, perspiciatis voluptate tempora repellat sint commodi iste! Odit dignissimos sapiente necessitatibus, placeat sequi voluptas eum quas quidem, molestiae optio voluptatem.
          Ab odio qui cum illum reprehenderit minus. Debitis ipsa modi quia quaerat delectus corporis eius rem non mollitia itaque quae, alias fugit! Expedita perferendis commodi eveniet ipsum veritatis cumque porro.;object-fit:content</div>
      </div>
      <div class="content">
          <div class="img-content"> <img style="width:100%;height:100%;object-fit:content" src="./img/BG.avif"  alt="" srcset=""> </div>
          <div class="txt-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio quibusdam, officiis molestiae libero quod deleniti eius? Ducimus provident corporis vero dignissimos maiores? Quas modi impedit ad totam harum est reiciendis.
          Repudiandae doloribus dignissimos ipsa ipsam, possimus, ea porro ratione obcaecati asperiores ex nam sed repellat molestiae cum eum in ullam provident quos magni quidem commodi fuga eligendi tempora? Asperiores, vero.
          Ullam deserunt, eligendi earum nam, unde aut nemo distinctio veritatis incidunt, harum deleniti. Deleniti provident vero, ut molestiae architecto esse voluptates! Sapiente vero non cum porro? Architecto debitis vitae aut?
          Voluptatibus sapiente adipisci fuga qui deleniti maxime porro consequatur dignissimos aliquam necessitatibus ut, ex omnis sit exercitationem, quas odio eos minima, eius eveniet aperiam culpa minus cumque. Optio, dolore accusantium.
          Voluptas at, nobis vitae eveniet laboriosam officia magni, voluptatem impedit expedita velit in placeat omnis. Cumque, ratione dignissimos necessitatibus officiis atque at ullam, deserunt corrupti recusandae quos fuga eveniet ea.
          Vel, autem eum dolore fugit hic atque cumque ex voluptatibus deleniti inventore dolorem rem, dolor exercitationem perferendis repudiandae? Rerum, rem praesentium quam repellat modi facere molestias culpa voluptas sapiente recusandae.
          Odio excepturi sequi, asperiores iste quis repudiandae adipisci perspiciatis in iusto quasi, architecto velit aliquid molestiae et dolore soluta! Quo similique cupiditate velit natus! Quisquam pariatur in dolorem placeat laborum.
          Odit necessitatibus pariatur inventore cumque? Non, illo doloribus. Modi delectus molestias, molestiae dolore incidunt nesciunt et reiciendis iste officia corporis sequi laboriosam natus nulla sapiente impedit illo dolores est blanditiis.
          Dolores numquam est pariatur ducimus, tempore hic, quod deserunt ex, perspiciatis voluptate tempora repellat sint commodi iste! Odit dignissimos sapiente necessitatibus, placeat sequi voluptas eum quas quidem, molestiae optio voluptatem.
          Ab odio qui cum illum reprehenderit minus. Debitis ipsa modi quia quaerat delectus corporis eius rem non mollitia itaque quae, alias fugit! Expedita perferendis commodi eveniet ipsum veritatis cumque porro.;object-fit:content</div>
      </div>
    </div>
   
            
            <br>
            
            
            
        
    <div class="footer">
        <div class="text-center p-3">
            <a href="#"><i class="fas fa-rss text-danger"></i></a>
            <a href="#"><i class="fas fa-laptop-code text-danger"></i></a>
        </div>
        <p class="text-center">All rights reserved. Designed By Reza</p>
    </div>
    <p id="id"></p>
    
    
      
      
      
      
    
    
    
    
    
    
    
    
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="./../slick/slick/slick.min.js"></script>
    <script src="http://localhost/order/users/JS/JaVA.js"></script>
    
   <script>
    
       $(document).ready(function () {
        sabad_action('','');
       
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