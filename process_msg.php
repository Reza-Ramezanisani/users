<?php 
session_start();
require "db.php";

 if(isset($_POST['name'])){
     $name = htmlspecialchars(stripslashes(mysqli_real_escape_string($conn,$_POST['name'])));
     $mail = htmlspecialchars(stripslashes(mysqli_real_escape_string($conn,$_POST['mail'])));
     $msg = htmlspecialchars(stripslashes(mysqli_real_escape_string($conn,$_POST['text'])));
     $time = time();
     if(empty($name) || empty($mail)  || empty($msg)){
        echo "ورودی ها خالی هستند";
        exit();
    }
    else if(!preg_match("/^[a-zA-Z0-9 اآبپتثجچحخدذرزژسشصضطظعغفقکگلمنوهی]+$/",$name)){
                echo "نام باید فقط حروف (انگلیسی یا فارسی) یا عدد باشد";
                exit();
                
        }
    elseif (!filter_var($mail,FILTER_VALIDATE_EMAIL)) {
        echo  "ایمیل نامعتبر است";
        exit();
    }else if(!preg_match("/^[a-zA-Z0-9 اآبپتثجچحخدذرزژسشصضطظعغفقکگلمنوهی]+$/",$msg)){
        echo "ورودی   نوشتن پیام باید فقط حروف (انگلیسی یا فارسی) یا عدد باشد";
        exit();
        
}else {
     $sql='SELECT email FROM users WHERE email=? AND name_msg=?';
     $stmt = mysqli_stmt_init($conn);
     if(!mysqli_stmt_prepare($stmt,$sql)){
         echo "error4";
        }else{
         mysqli_stmt_bind_param($stmt,"ss",$mail,$name);
         mysqli_stmt_execute($stmt);
         $result=mysqli_stmt_get_result($stmt);
         if(mysqli_num_rows($result)){
             if(!empty($msg)){
                 $sql1 = "SELECT unique_id FROM users WHERE email=? AND name_msg=?";
                 $stmt1 = mysqli_stmt_init($conn);
                
                 if(!mysqli_stmt_prepare($stmt1,$sql1)){
                     echo "error4";
                    }else{
                        mysqli_stmt_bind_param($stmt1,"ss",$mail,$name);
                        mysqli_stmt_execute($stmt1);
                        $result1=mysqli_stmt_get_result($stmt1);
                        
                        if(mysqli_num_rows($result1)){
                            $unique_ID = mysqli_fetch_assoc($result1)['unique_id'];
                            $sql3= "INSERT INTO m(sender_id,msg,time_msg) VALUES(?,?,?)";
                            $stmt2 = mysqli_stmt_init($conn);
                            if(!mysqli_stmt_prepare($stmt2,$sql3)){
                                echo "error6";
                                }else{
                                    mysqli_stmt_bind_param($stmt2,"isi",$unique_ID,$msg,$time);
                                    mysqli_stmt_execute($stmt2);
                                    $result2=mysqli_stmt_get_result($stmt2);
                                    // setcookie("unique",$unique_ID,time() + (8400 *30),"/");
                                    $_SESSION['unique_id']=$unique_ID;
                                    echo "ارسال شد";
                                }
                        }
                    }
                    }else {
                 echo "<span style='color:yellow'>enter message<span>";
             }
            
         }else{
              $unique_id = rand(time() , 1000000000);   
            //   setcookie("unique",$unique_id,time() + (8400 *30),"/");
              $_SESSION['unique_id']=$unique_id;
            $sql = "INSERT INTO users(name_msg,email,unique_id) VALUES(?,?,?)";
           $stmt = mysqli_stmt_init($conn);
           if(!mysqli_stmt_prepare($stmt,$sql)){
               echo "error1";
           }else{
               mysqli_stmt_bind_param($stmt,"ssi",$name,$mail,$unique_id);
               mysqli_stmt_execute($stmt);
            //    echo "was send message.";
           }
         }

        }
    }
       
        
    }else{
        header("Location : send_msg.php");
    }
    
    if($_FILES['img']['error']!==4){
        $basename=md5(uniqid(rand(),TRUE));
        $type_img=explode("/",$_FILES['img']['type'])[1];
        $extension=$_FILES['img']['type'];
        $path="upload/".$basename.'.'.$type_img;
        $tmp_name=$_FILES['img']['tmp_name'];
        $size=$_FILES['img']['size'];
        $name_img=$basename.'.'.$type_img;
        if(getimagesize($tmp_name)){
           if ($extension != "image/jpg" && $extension!= "image/png" && $extension != "image/jpeg" && $extension != "image/if") {
                echo "<span class='text-warning'>فقط فرمت png  jpg jpeg  gif مورد قبول است</span>";
                exit();
            }elseif ($size /1024/1024 >1) {
                echo "<span class='text-danger'> حجم عکس زیاد است</span>";
                exit();
            }
            else {
                if(move_uploaded_file($tmp_name,$path)){
                    $sql="UPDATE  users  SET img=? WHERE email=? AND name_msg=?";
                    $stmt=mysqli_stmt_init($conn);
                     if(!mysqli_stmt_prepare($stmt,$sql)){
                         echo "<span class='text-danger'>خطا</span>";
                          exit();
            
                     }else{
                         mysqli_stmt_bind_param($stmt,"sss",$name_img,$mail,$name);
                         mysqli_stmt_execute($stmt);
                         
                     }
                }else {
                  echo "<span class='text-danger'>خطا</span>";
                    
                }
            }
        }else{
        echo "<span class='text-danger'> این فایل عکس نیست دوباره امتحان کنید</span>";
            
        }

    }
    // $sql = "UPDATE users SET img='$basename' WHERE email='$mail' AND name_msg='$name'";
    // mysqli_stmt_close($stmt);
    // mysqli_close($conn);
?>