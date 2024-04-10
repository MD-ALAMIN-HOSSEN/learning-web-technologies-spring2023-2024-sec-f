<?php
require_once('../model/userModel.php');
    $id = $_GET['id'];
    if(deleteUser($id)){
        header("Location: ../view/Admin.php");
        exit();
    }
?>