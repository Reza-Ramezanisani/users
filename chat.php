<?php
    session_start();
    include "db.php";
    $sql="SELECT unique_id FROM users";
    $result = mysqli_query($conn,$sql);
    while ($row=mysqli_fetch_assoc($result)) {
        $sql2 = "SELECT * FROM m  LEFT JOIN users AS u ON u.unique_id = m.sender_id WHERE sender_id='{$row['unique_id']}' OR receiver_id='{$row['unique_id']}' ORDER BY id_msg ASC ";
        $result2 = mysqli_query($conn,$sql2);
        $output='';
        while ($row2=mysqli_fetch_assoc($result2)) {
        if($row2['sender_id']==='0'){
            $admin="آدمین";
        }else{
            $admin="یوزر";
        }
        $output .='<div style="border: 3px dashed black;border-radius: 12px;background: pink;display: flex;margin: 10px;padding: 10px;">
                        <div style="width: 50px;height: 50px;margin-right: 10px;"><img src="upload/'.$row2['img'].'" alt=""></div>
                        <p >  '.$row2['msg'].':'.$admin.'</p>
                   </div>';
                }
          echo $output;
    }
?>