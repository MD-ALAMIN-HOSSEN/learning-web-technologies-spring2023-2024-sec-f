<?php
    require_once('../model/userModel.php');

    $product_name = $_REQUEST['product_name'];
    $quantity = $_REQUEST['quantity'];
    $price = $_REQUEST['price'];

    if($product_name == "" || $quantity == "" || $price == ""){
        echo "null username/password/email";
    }else {

        $product = ['product_name'=> $product_name,'quantity'=>$quantity, 'price'=>$price];
        $status = createProduct($product);
        if($status){
            header('location: ../view/employee.php');
        }else{
            echo "DB error! Please try again";
        }
    
    }
?>