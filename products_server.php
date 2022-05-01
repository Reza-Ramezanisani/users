<?php
     
     require "db_menu.php";
     $sql ='SELECT * FROM menu';
     $result = mysqli_query($conn,$sql);
     $output='';
     $list=array('Dry Food','watry Food','junk Food','Beverages','Vegetables');
     
     while ($row=mysqli_fetch_assoc($result)) {
       
      
         if ($row['dis']==="on") {
             $fa=' <div class="brand_" >
                    <span >تخفیف</span>
                </div>';
         }else{
             $fa="";
         } 
         if($row['status_menu']==="on"){
            $row['status_menu']="موجود";
            $no=$row['number_menu'];
            $color='background: rgb(240, 186, 8)';
           $link='<button id="add" onclick="sabad_action(this,'.$row['ID'].')" class="btn-order add btn-add_'.$row['ID'].' p-1">افزودن به سبد خرید</button>
           <button id="add" style="display: none;"  class="btn-order added btn-added_'.$row['ID'].' p-1">افزودن شد</button>
           ';
            
         }else{
            $row['status_menu']="نا موجود ";
            $no=0;
            $color='background:red';
            $link='<p dir="rtl" class="btn-order p-1 bg-danger">خدمات رسانی ندارد</p>';
         }
         
        $output.='
                <div class="card " style="position: relative;">'.$fa.'
                    
                    <div class="desc row">
                        <div class="img-card col-md" style="width: 30vw;height: 25vh;"><img style="object-fit:cover;wwidth:100%;height:100%" src="./../admin/PHP/upload_menu/'.$row['img'].'" alt=""></div>
                         <div class="text-card col-md" style="border-radius: 10px;;background: lightblue;height: 30vh;padding: 5px;overflow:auto;text-indent:12px">
                                <h5 dir="rtl">'.$row['name_menu'].'</h5>
                                '.$link.'
                                <h5 dir="rtl" >قیمت'.$row['price'].'هزار تومن</h5>
                                <span dir="rtl" style="background: rgb(240, 186, 8);border-radius: 12px;padding: 2px;">'.$list[$row['category']] .'</span>
                                <span dir="rtl" style="'.$color.';border-radius: 12px;padding: 2px;"> تعداد :'.$no .'</span>
                                <span dir="rtl" style="'.$color.';border-radius: 12px;padding: 2px;"> وضعیت:'.$row['status_menu'] .'</span>
                                <input dir="rtl" type="number" id="qty_'.$row['ID'].'" value="1" min="1" max="'.$no.'" style="border-radius: 12px;padding: 2px;"></input>چه تعداد
                                <p class="text-muted" dir="rtl">'.$row['desc_menu'].'</p>
                        </div>
                    </div>
            </div>
        ';
    
        
     }
     echo $output;



?>
