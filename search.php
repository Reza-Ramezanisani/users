<?php
 require "db_menu.php";
 $search  = mysqli_real_escape_string($conn,$_POST['search']);
 $sql = "SELECT * FROM menu WHERE name_menu  LIKE '%$search%'";
 $result = mysqli_query($conn,$sql);
 $output="";
 $list=array('Dry Food','watry Food','junk Food','Beverages','Vegetables');
 if(mysqli_num_rows($result) ===0){
    $output.="<h1 class='text-danger text-center'>NOT FOUND!</h1>";
 }else{
     while ($row = mysqli_fetch_assoc($result)) {
        if ($row['dis']==="yes" || $row['dis']==="on") {
            $fa=' <div class="brand_" >
                   <span ></span>
               </div>';
        }else{
            $fa="";
        }
        
       $output.='
               <div class="card " style="position: relative;">'.$fa.'
                   
                   <div class="desc">
                       <div class="img-card" style="width: 80px;height: 80px"><img style="object-fit:cover" src="./../admin/PHP/upload_menu/'.$row['img'].'" alt=""></div>
                        <div class="text-card" style="width: 75%;background: lightblue;height: 30vh;padding: 5px;overflow:auto;text-indent:12px">
                        <h5>'.$row['name_menu'].'</h5>
                        <h5>$'.$row['price'].'</h5>
                        <a href="order.php?id='.$row['ID'].'" class="btn-order p-1">Order now</a>
                               <span style=" background: rgb(240, 186, 8);border-radius: 12px;padding: 2px;">'.$list[$row['category']-1] .'</span>
                               <span style=" background: rgb(240, 186, 8);border-radius: 12px;padding: 2px;"> Count:'.$row['number_menu'] .'</span>
                               <span style=" background: rgb(240, 186, 8);border-radius: 12px;padding: 2px;"> Status:'.$row['status_menu'] .'</span>
                               <p class="text-muted">'.$row['desc_menu'].'</p>
                   </div>
                   </div>
           </div>
       ';
    
       
    }
 }
echo $output;



?>