<?php
require_once('../model/userModel.php');
    $id = $_GET['id'];
    if(deleteProduct($id)){
        header("Location: ../view/employee.php");
        exit();
    }
?>