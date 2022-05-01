<?php
session_start();
require "db_menu.php";
// if(isset($_POST['act'])){
//     switch ($_POST['act']) {
//         case 'add':
//             if(!empty($_POST['qty'])){
//                 if(!preg_match("/^[0-9]+$/",$_POST['qty'])){
//                     exit();
//                 }else{
//                     $sql ='SELECT * FROM menu WHERE ID=?';
//                     $stmt = mysqli_stmt_init($conn);
//                     if (!mysqli_stmt_prepare($stmt,$sql)) {
//                         echo "error";
//                     }else{
//                         mysqli_stmt_bind_param($stmt,"i",$_POST['id']);
//                         mysqli_stmt_execute($stmt);
//                         $fetch = mysqli_stmt_get_result($stmt);
//                         $res=mysqli_fetch_assoc($fetch);
                      
//                         $itemArray = array($res['ID'] => array('name'=>$res['name_menu'],'price'=>$res['price'] ,'qty' => $_POST['qty']));
//                         if(!empty($_SESSION['card'])){
                        
//                             if(in_array($res['ID'],$_SESSION['card'])){
                           

//                                  foreach ($_SESSION['card'] as $key => $value) {
//                                     if($res['ID'] === $key ){
//                                        $_SESSION['card'][$key]['qty']=$_POST['qty'];
//                                     }
//                                  }

//                             }else{
//                                 $_SESSION['card'] = array_merge($_SESSION['card'],$itemArray);
                                
//                             }

//                         }else{

//                             $_SESSION['card']=$itemArray;

//                         }
//                 }
//             }
//         }
//             break;

//             case "empty":
//                 unset($_SESSION['card']);
//                 break;
        
       
     


//         }
// }

 

   






























if(isset($_POST['act'])){
  
    
    if(isset($_COOKIE['shop'])){
        
        $cookie_data = stripslashes($_COOKIE['shop']);
        
        $cart = json_decode($cookie_data, true);
        
    }else{
        
        $cart=array();
        
    }
    // $item_id_list = array_column($cart, 'id');
    // print_r($item_id_list);
    // // echo $_COOKIE['shop'];
    // print_r($cart);
    // echo !is_null($cart);



    switch ($_POST['act']) {
        case 'add':
            if(!empty($_POST['qty'])){
                

                $sql ='SELECT * FROM menu WHERE ID=?';
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt,$sql)) {
                    echo "error";
                }else{
                    mysqli_stmt_bind_param($stmt,"i",$_POST['id']);
                    mysqli_stmt_execute($stmt);
                    $fetch = mysqli_stmt_get_result($stmt);
                    $res=mysqli_fetch_assoc($fetch);
                   
                    $item_id_list = array_column($cart, 'id');
                    if(in_array($_POST['id'],$item_id_list)){
                        foreach ($cart as $key => $value) {
                            if($cart[$key]['id'] === $_POST['id']){
                                $cart[$key]['qty']=$_POST['qty'];
                            }
                        }

                    }else{
                        $item = array(
                            'id'=>$_POST['id'],
                            'name'=>$res['name_menu'],
                            'price'=>$res['price'],
                            'qty'=>$_POST['qty']
                        );
                        $cart[]=$item;
                        
                    }

                  
                }
                $item_data = json_encode($cart);
                setcookie("shop",$item_data,time() + 8400);
            }
            break;
            case "remove":
                foreach ($cart as $key => $value) {
                    if($value['id'] === $_POST['id']){
                        unset($cart[$key]);
                    }
                }
               
                $item_data = json_encode($cart);
                setcookie("shop",$item_data,time() + 8400);

                break;
            case "empty":
                setcookie("shop","",time() - 4000);
                break;
                // $cookie_data = stripslashes($_COOKIE['cart']);
                // $cart = json_decode($cookie_data, true);
                // foreach ($cart as $key => $value) {
                //     if($cart[$key]['id'] === $res['ID']){
                //         unset($cart[$key]['id']);
                //     }
                // }
                
    }

    
    


}
if(isset($_COOKIE['shop'])){
    $total_price=0;
    $cookie_data = stripslashes($_COOKIE['shop']);
    $cart = json_decode($cookie_data, true);
    // print_r($cart);
    if(empty($cart)){
        echo 'سبد خالی است';
        
    }else{
        
   

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
                <td><button class="btn p-1" onclick="qty_sabad(-1,<?php echo $val['id']; ?>)" style="padding: 2px;font-size: .9em;">-  </button><span class="QTY QTY_sabad_<?php echo $val['id']; ?>" style="padding: 5px;"><?php echo $val['qty'];?></span><button class="btn p-1" onclick="qty_sabad(+1,<?php echo $val['id']; ?>)" style="padding: 2px;font-size: .9em;">  +</button></td>
                <td class="PRICE"><?php echo $val['price'];?></td>
                <td id="remove" style="cursor: pointer;color: red;"  onclick="sabad_action(this,<?php echo $val['id']?>)">حذف</td>

            </tr>
            <?php  }?>
        </table>

       
        <span dir="rtl" id="total"> قیمت کلی :<?php echo $total_price ?>0 ريال</span>
        <button class="btn btn-success">سفارش </button>

   <?php }
}


    
    
    
    
      
   


// echo $_COOKIE['CARD'];






















//  $result = mysqli_query($conn,$sql);
//  while ($row=mysqli_fetch_assoc($result)) {
//      echo "yes<br>";
//      if($_POST['id'] === $row['ID']){
         
//          $obj = new stdClass();
//        $obj->name=$row['name_menu'];
//        $obj->price=$row['price'];
//        $obj->no=$row['number_menu'];
//        $json = json_encode($obj);
//        setcookie("sabad",json_encode($obj),time()+8400 *20,"/");

//        echo $_COOKIE['sabad'];
//    }
    
    
    
// }



 
//  $obj = new stdClass();
//  $obj->name='reza';
//  $obj->age=12;
//  $obj->arr=array(1,2,3);
//  $json = json_encode($obj);
//  setcookie("a",$json,time()+8400 *2);
//  print_r($json);
//  echo $_COOKIE['a'];