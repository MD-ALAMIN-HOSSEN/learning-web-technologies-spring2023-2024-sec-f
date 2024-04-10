<?php
require_once('../model/userModel.php');
//echo $_POST['product_name'];
$id = $_POST['id']; // Assuming you have an input field with name 'id' in your form
$productName = $_POST['product_name'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
if(updateProduct($id, $productName, $quantity, $price)){
    header("Location: ../view/employee.php");
        exit();
}

?>