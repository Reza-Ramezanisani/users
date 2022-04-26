<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script rel="stylesheet" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="Chat.css">
    <link rel="stylesheet" href="er.css">

    <script src='J.js'></script>

    <title>Food</title>
    
</head>
<body>
<ul class="navbar-top">
      <div class="brand">
          <img src="./img/logo.png" alt="Logo">
      </div>
      <div class="clock">
          
      </div>
      <div class="date">
        
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

    <main>
        <form action="#" method="post" id='form' autocomplete='off' enctype='multipart-form-data'>
            <h3 class='text-center'>لطفا نام (به انگلیسی) و ایمیل را وارد کنید تا بتوانید پیغامی را ارسال کنید </h3>
            <div class="alert alert-dismissble" style='display: none;position: fixed;top: 0;left: 0;;right: 0;;width: 100%'><span style='color:yellow'>enter message<span></div>
            <div  style='margin: 0 auto;width: 50%;'>
                 <label for="a">نام (ضروری)</label>
                 <input id='a' class='form-control'  autofocus oninput='msg()' name='name' pattern='[a-zA-Z].{10}' maxlength='10' required='required' type="text">
                 <label for="em">ایمیل (ضروری)</label>
                 <input  class='form-control'   name='mail' id='em' oninput='msg()'   required='required' type="email">
                 <label for="b">عکستان (دلخواه)</label>
                 <input class='form-control'  type="file" name="img" id="b" accept='image/*'>
                 <br>
            </div>
        </form>
        <div class="view_msg">
            <div class="chat_box">

            </div>

            
            <div class='bottom'>
            <button id='submit' class='j' disabled style='cursor: not-allowed;'><i class="fas fa-location-arrow"></i></button>
            <input type="text" class='px-2 j' style='cursor: not-allowed;' form='form' name='text' placeholder='  write message' disabled>
            </div>

        </div>

    </main>






<script src="JA.js"></script>
    
</body>
</html>