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
             <button class="btn-drop btn">لیست<i class="fas fa-caret-down"></i></button>
             <div class="dropdown-content">
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
  <div class="header-bg">
      <form action="#" method="post" id="form_search" style="display: flex;justify-content: center;flex-direction: column;position: relative;width:80%;margin:0 auto">
          <div style="display: flex;justify-content: center;">
              <input type="search" name="food_search" onclick="Todo_play()" dir="rtl" id="food_search" autocomplete="off">
              <input type="submit" class='btn' id="btn_search"  value="سرچ">
          </div>
         <div class="TODOS" style="overflow: auto">
             <span onclick="Todo_remove()" style="position: absolute;top:10%;font-size: 2em;;right:5%;z-index: 1px;;cursor: pointer;color:red;background: white;border-radius: 50%;">&times;</span>
         </div>
        </form>
  </div>
  <div class="scroll">
      <i class="fas fa-home" style="color: white;"></i>
  </div>