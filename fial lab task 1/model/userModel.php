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
    
    function getAllUser(){
        $con = dbConnection();
        $sql = "select * from users";
        $result = mysqli_query($con, $sql);
        $users = [];
        
        while($row = mysqli_fetch_assoc($result)){
            array_push($users, $row);
        }
        
        return $users;
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

    function deleteUser($id){

    }

    function updateUser($user){

    }
?>