<?php

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