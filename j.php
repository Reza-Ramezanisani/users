<?php
require "db_menu.php";

$item_array = array();
array_column($item_array,"id");
//    $cart_data[] = $item_array;
//    $item_data = json_encode($cart_data);
//    setcookie('shopping_cart', $item_data, time() + (86400 * 30));
//    echo !empty($_COOKIE['shopping_cart']);
//    $cart_data = json_decode($_COOKIE['shopping_cart'], true);
//    print_r($cart_data);




if(isset($_COOKIE['shop'])){
    $cookie_data = stripslashes($_COOKIE['cart']);
    $cart = json_decode($cookie_data, true);
    ?>
    <button onclick="sabad_action(this)" id="empty" >empty</button>z
    
    <?php foreach ($cart as $item) {
        echo '
        <ul>
            <li>'.$item['name'].'</li>
            <li>'.$item['qty'].'</li>
            <li>'.$item['price'].'</li>
        </ul>

        ';

    }}
    $sql ='SELECT * FROM menu WHERE ID=65';
        $re=mysqli_query($conn,$sql);
        $res=mysqli_fetch_assoc($re);
        
        $item = array(
            'name'=>$res['name_menu'],
            'price'=>$res['price'],
        );
    $cart[]=$item;
    print_r($item);
    $item_data = json_encode($cart);
    setcookie("s",$item_data,time() + 8400);
    print_r($_COOKIE['s']);
    