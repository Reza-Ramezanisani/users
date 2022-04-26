<?php
     require "db_menu.php";
     $sql ='SELECT * FROM menu';
     $result = mysqli_query($conn,$sql);
     $output='';
     $list=array('Dry Food','watry Food','junk Food','Beverages','Vegetables');
     while ($row=mysqli_fetch_assoc($result)) {
         if ($row['dis']==="yes" || $row['dis']==="on") {
             $fa=' <div class="brand_" >
                    <span ></span>
                </div>';
         }else{
             $fa="";
         } 
         if($row['status_menu']==="on" || $row['status_menu']==="exists"){
            $row['status_menu']="موجود";
         }else{
            $row['status_menu']="نا موجود ";
         }
         
        $output.='
                <div class="card " style="position: relative;">'.$fa.'
                    
                    <div class="desc">
                        <div class="img-card" style="width: 80px;height: 80px"><img style="object-fit:cover" src="./../admin/PHP/upload_menu/'.$row['img'].'" alt=""></div>
                         <div class="text-card" style="width: 75%;background: lightblue;height: 30vh;padding: 5px;overflow:auto;text-indent:12px">
                         <h5>'.$row['name_menu'].'</h5>
                         <h5>قیمت'.$row['price'].'هزار تومن</h5>
                         <a href="order.php?id='.$row['ID'].'" class="btn-order p-1">سفارش بده الان</a>
                                <span style=" background: rgb(240, 186, 8);border-radius: 12px;padding: 2px;">'.$list[$row['category']-1] .'</span>
                                <span style=" background: rgb(240, 186, 8);border-radius: 12px;padding: 2px;"> تعداد :'.$row['number_menu'] .'</span>
                                <span style=" background: rgb(240, 186, 8);border-radius: 12px;padding: 2px;"> وضعیت:'.$row['status_menu'] .'</span>
                                <p class="text-muted">'.$row['desc_menu'].'</p>
                    </div>
                    </div>
            </div>
        ';
    
        
     }
     echo $output;



?>
