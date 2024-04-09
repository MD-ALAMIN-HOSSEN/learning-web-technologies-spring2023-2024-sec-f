<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add product </title>
</head>
<body>
Fill the product details : <br><br>
    <form  method="post"action="../controller/addproduct.php"  enctype="">
        product name <input type="text" name="product_name" value="">  <br>
        quantity <input type="number"  name="quantity"value=""><br>
        price  <input type="number" name="price">$<br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>