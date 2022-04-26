<?php 
session_start();
 if(isset($_POST['name'])){
     require "db.php";
     $name = mysqli_real_escape_string($conn,$_POST['name']);
     $mail = mysqli_real_escape_string($conn,$_POST['mail']);
     $msg = mysqli_real_escape_string($conn,$_POST['text']);
     $time = time();
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
                 $sql1 = "SELECT unique_id FROM users WHERE email='$mail' AND name_msg='$name'";
                 $query = mysqli_query($conn,$sql1);
                        if(mysqli_num_rows($query)){
                            $unique_ID = mysqli_fetch_assoc($query)['unique_id'];
                            $sql2= "INSERT INTO m(sender_id,msg,time_msg) VALUES(?,?,?)";
                            $stmt = mysqli_stmt_init($conn);
                            if(!mysqli_stmt_prepare($stmt,$sql2)){
                                echo "error6";
                                }else{
                                    mysqli_stmt_bind_param($stmt,"isi",$unique_ID,$msg,$time);
                                    mysqli_stmt_execute($stmt);
                                    $_SESSION['unique_id']=$unique_ID;
                                    echo "was send message.";
                                }
                        }
                    }else {
                 echo "<span style='color:yellow'>enter message<span>";
             }
            
         }else{
              $unique_id = rand(time() , 1000000000);    
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
        if($_FILES['img']['error']!==4){
            if(getimagesize($_FILES['img']['tmp_name'])){
                $basename=$_FILES['img']['name'];
                $path="upload/".$basename;
                $ext=pathinfo($basename,PATHINFO_EXTENSION);
                if($ext != "jpg" && $ext != "gif" && $ext != "jpeg" && $ext != "png" ){
                    echo "file is not image";
                }else{
                    if(move_uploaded_file($_FILES['img']['tmp_name'],$path)){
                       $sql = "UPDATE users SET img='$basename' WHERE email='$mail' AND name_msg='$name'";
                       mysqli_query($conn,$sql);
                    }else{
                        echo "error2";
                    }
                }
            }else{
                echo "file is not image";
            }
        }
    
     mysqli_close($conn);

 }else{
     header("Location : send_msg.php");
 }


?>