<?php 
    require_once('db.php');

    function login($username, $password){
        $con = dbConnection();
        $sql = "select * from users where name='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            return true;
        }else{
            return false;
        }
    }

    function updateUser($id, $employeeName, $contactNo, $username, $password){
        $con = dbConnection();
        $sql = "UPDATE employee 
            SET employee_name = '$employeeName', 
                contact_no = '$contactNo', 
                username = '$username',
                password = '$password'
            WHERE id_e = '$id'";
            if(mysqli_query($con, $sql)){
                return true; 
            } else {
                return false; 
            }
    }
    function deleteUser($id) {
        $con = dbConnection();
        $id = mysqli_real_escape_string($con, $id);
    
        $sql = "DELETE FROM employee WHERE id_e = '$id'";
    
        if(mysqli_query($con, $sql)){
            return true; // Return true if deletion is successful
        } else {
            return false; // Return false if deletion fails
        }
    }
    function updateProduct($id, $productName, $quantity, $price){
        $con = dbConnection();
        $sql = "UPDATE product 
            SET product_name = '$productName', 
                quantity = '$quantity', 
                price = '$price' 
            WHERE product_id = '$id'";
            if(mysqli_query($con, $sql)){
                return true; 
            } else {
                return false; 
            }
    }
    function deleteProduct($id) {
        $con = dbConnection();
        $id = mysqli_real_escape_string($con, $id);
    
        $sql = "DELETE FROM product WHERE product_id = '$id'";
    
        if(mysqli_query($con, $sql)){
            return true; // Return true if deletion is successful
        } else {
            return false; // Return false if deletion fails
        }
    }
    

    function getProductById($id){
        $con = dbConnection();
        $id = mysqli_real_escape_string($con, $id); 
        $sql = "SELECT * FROM product WHERE product_id = '$id'";
        $result = mysqli_query($con, $sql);
        $product = mysqli_fetch_assoc($result); 
    
        return $product;
    }

    function getUserById($id){
        $con = dbConnection();
        $id = mysqli_real_escape_string($con, $id); 
        $sql = "SELECT * FROM employee WHERE id_e = '$id'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result); 
    
        return $user;
    }
    
    
    function getAllUser(){
        $con = dbConnection();
        $sql = "select * from employee";
        $result = mysqli_query($con, $sql);
        $users = [];
        
        while($row = mysqli_fetch_assoc($result)){
            array_push($users, $row);
        }
        
        return $users;
    }

    
    function getAllProducts(){
        $con = dbConnection();
        $sql = "select * from product";
        $result = mysqli_query($con, $sql);
        $products = [];
        
        while($row = mysqli_fetch_assoc($result)){
            array_push($products, $row);
        }
        
        return $products;
    }
    
    #$employee = ['employee_name'=> $employee_name,'contact_no'=>$contact_no, 'username'=>$username, 'password'=>$password];
    function createUser($employee){
        $con = dbConnection();
        $sql = "insert into employee values('', '{$employee['employee_name']}', '{$employee['contact_no']}','{$employee['username']}', '{$employee['password']}')";       
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }

    #$product = ['product_name'=> $product_name,'quantity'=>$quantity, 'price'=>$price];
    function createProduct($product){
        $con = dbConnection();
        $sql = "insert into product values('', '{$product['product_name']}', '{$product['quantity']}','{$product['price']}')";       
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }

    function searchUsers($searchKeyword) {
        $con = dbConnection();
        // Construct SQL query to match partially to offer easy to search
        $sql = "SELECT * FROM employee WHERE employee_name LIKE '%$searchKeyword%'";
    
        // Execute SQL query
        $result = mysqli_query($con, $sql);
    
        $users = [];
        // Fetch result rows as an associative array
        while($row = mysqli_fetch_assoc($result)) {
            $users[] = $row;
        }
    
        return $users;
    }
    

?>