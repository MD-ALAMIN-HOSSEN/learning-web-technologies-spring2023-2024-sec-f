<?php
require_once('../model/userModel.php');
    $id = $_GET['id'];
    $product =getProductById($id);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit product </title>
</head>

<body>
    Fill the product details : <br><br>
    <form method="post" action="../controller/update_product.php" enctype="">
        <input type="hidden" name="id" value="<?php echo $product['product_id']; ?>">
        product name <input type="text" name="product_name" value="<?php echo $product['product_name']; ?>"> <br>
        quantity <input type="number" name="quantity" value="<?=$product['quantity'] ?>"><br>
        price <input type="number" name="price" value="<?php echo $product['price']; ?>">$<br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>