<?php require_once "db_menu.php";
 $sql="SELECT * FROM category";
 $query=mysqli_query($conn,$sql);
 while ($row=mysqli_fetch_assoc($query)) {
     ?>
     
     <button class="btn_tab"  onclick="TABS(this,'CAT-<?php echo $row['id']; ?>')"><?php echo $row['name_cat']; ?></button>
     
 <?php }