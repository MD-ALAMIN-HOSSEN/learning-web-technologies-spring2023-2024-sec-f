<?php
    require_once('../model/userModel.php');
    $products = getAllProducts();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
</head>

<body>
    <h1>products</h1>
    <a href="add_product.php">Add product</a>
    <br>
    <br>
    <table border=1>
        <tr>
            <th>Product name</th>
            <th>quantity</th>
            <th>price $</th>
            <th>Action</th>
        </tr>
        <?php for($i=0; $i<count($products); $i++){?>
        <tr>
            <td><?php echo $products[$i]['product_name']; ?></td>
            <td><?=$products[$i]['quantity'] ?></td>
            <td><?php echo $products[$i]['price']; ?></td>
            <td>
                <a href="edit_product.php?id=<?=$products[$i]['product_id']?>"> EDIT </a> |
                <a href="../controller/delete_product.php?id=<?=$products[$i]['product_id']?>"> DELETE </a> |
            </td>
        </tr>
        <?php } ?>
    </table>
</body>

</html>