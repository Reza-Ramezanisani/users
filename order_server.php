<?php
    if(isset($_POST['fname'])){
        require "db_menu.php";
        $id_order=mysqli_real_escape_string($conn,$_POST['id_order']);
        $sql = "SELECT * FROM menu WHERE ID='$id_order'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $fname=mysqli_real_escape_string($conn,$_POST['fname']);
        $add=mysqli_real_escape_string($conn,$_POST['adderss']);
        $mail=mysqli_real_escape_string($conn,$_POST['mail']);
        $tel=mysqli_real_escape_string($conn,$_POST['tel']);
        $no=mysqli_real_escape_string($conn,$_POST['no']);
        $menu_name=$row['name_menu'];
        $category=$row['category'];
        $price=$row['price'];
        $img=$row['img'];
        $dis=$row['dis'];
        if(empty($fname) || empty($add) || empty($mail) || empty($tel) ){
            echo "<span style='color:red'>ورودی های خالی هستند</span>";
        }elseif (!filter_var($mail,FILTER_VALIDATE_EMAIL)) {
            echo "<span style='color:red'>ایمیل نادرست است</span>";
        }elseif (!preg_match("/[0-9]+/",$tel) || strlen($tel) !==11 ) {
          echo "<span style='color:red'>شماره تلفن نادرست است</span>";
        }else{
            $sql2 = "INSERT INTO order_menu(fname,mail_order,tel_order,address_order,number_order,name_menu,category,price,dis) 
            VALUES(?,?,?,?,?,?,?,?,?)";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt,$sql2)) {
                echo "error";
            }else{
                mysqli_stmt_bind_param($stmt,"ssisisiis",$fname,$mail,$tel,$add,$no,$menu_name,$category,$price,$dis);
                mysqli_stmt_execute($stmt);
                echo "<span style='color:red'>success</span>";
            }
        }
    }else{
        header("Location: order.php");
    }

?>