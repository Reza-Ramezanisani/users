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
         <li class="dropdown">
             <button class="btn-drop btn">سبد خرید<i class="fas fa-caret-down"></i></button>
             <div class="dropdown-content d1" >
                <div id="shop_card">
                    سبد خرید خالی است
                </div>
             </div>
         </li>
         <li class="dropdown">
             <button class="btn-drop btn">لیست<i class="fas fa-caret-down"></i></button>
             <div class="dropdown-content d2">
                 <a href="send_msg.php">پیغامی داری بفرست</a>
                 <a id="find" href="#">کجا هستیم ما</a>
             </div>
         </li>
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
  <div class="header-bg" style='background-image: url("img/brooke-lark-IDonmDWrXO8-unsplash.jpg");position: relative;'>
    <div class="TODOS" style="overflow: auto">
        <span onclick="Todo_remove()" style="position: absolute;top:10%;right:5%;z-index: 1px;;cursor: pointer;color:red;background: white;border-radius: 50%;">&times;</span>
    </div>
        
        <form action="#" method="post" id="form_search" style="display: flex;justify-content: center;flex-direction: column;position: relative;width:80%;margin:0 auto">
                <div style="display: flex;justify-content: center;">
                    <input type="search" name="food_search" onclick="Todo_play()" dir="rtl" id="food_search" autocomplete="off">
                    <input type="submit" class='btn' id="btn_search"  value="سرچ">
                </div>
                </form>
       
      
  </div>
  <div class="scroll" style="z-index: 10">
      <i class="fas fa-arrow-alt-circle-up" style="color: white;"></i>
  </div>