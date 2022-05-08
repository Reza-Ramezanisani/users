<?php




if(isset($_POST['name'])){
require "db_menu.php";
$name=htmlspecialchars(mysqli_real_escape_string($conn,$_POST['name']));
$address=htmlspecialchars(mysqli_real_escape_string($conn,$_POST['address']));
$tel=htmlspecialchars(mysqli_real_escape_string($conn,$_POST['tel']));
$pardaght=htmlspecialchars(mysqli_real_escape_string($conn,$_POST['pool']));
$code_order = round(mt_rand(1000,9999));
$data_json=$_POST['data'];
// date_default_timezone_set('Asia/Tehran');
$time= time();


if(empty($address) || empty($tel) ||empty($name) || empty($tel)){
    echo "ورودی ها خالی هستند";
    exit();
}else if(!preg_match("/^[^(<>*&^%$#@!|\/?`~)]+$/",$data_json)){
    echo "خطا";
    exit();
}else if(!preg_match("/^[a-zA-Z0-9 اآبپتثجچحخدذرزژسشصضطظعغفقکگلمنوهی]+$/",$name)){
echo "نام باید فقط حروف (انگلیسی یا فارسی) یا عدد باشد";
exit();
}
elseif (!preg_match("/^[0-9]+$/",$tel)) {
    echo "شماره تلفن موبایل باید فقط عدد باشد";
    exit();
}elseif (strlen($tel) !== 11 ) {
    echo " تعداد ارقام تلفن موبایل نادرست است";
    exit();
}else if(!preg_match("/^[a-zA-Z0-9 اآبپتثجچحخدذرزژسشصضطظعغفقکگلمنوهی]+$/",$address)){
    echo "ورودی آدرس فقط حروف و عدد مجاز است";
    exit();
}else if(!preg_match("/^[a-z]+$/",$pardaght)){
    echo "خطا";
    exit();
}else if(strlen($address) > 120 ){
    echo "ورودی آدرس فقط 120 کارکتر مجاز است";
    exit();
}else {
    
       

           
       
    
            $sql="INSERT INTO order_menu (fname,tel_order,address_order,name_order,time_order,pardaght) VALUES(?,?,?,?,?,?)";
            $stmt=mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                echo "خطا وجود دارد";
                exit();
            }else{
                
                mysqli_stmt_bind_param($stmt,"ssssss",$name,$tel,$address,$data_json,$time,$pardaght);
                mysqli_stmt_execute($stmt);
                echo "<i class='text-success'>سفارش شما ثبت سیستم شد. منتطر دریافت آن در ساعات آینده باشید</i>";
                
            }
        

          
                
                
    
}
            
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
 

}else {
    header("Location:./shop.php");
}




?>



<!-- SELECT * FROM order_menu WHERE name_order="[{"id":"67","name":"coca","price":79,"qty":"3"},{"id":"68","name":"شیرینی","price":9,"qty":"10"}]" AND tel_order="09123588535" AND fname="رضا" AND address_order="طبس" LIMIT 1; -->