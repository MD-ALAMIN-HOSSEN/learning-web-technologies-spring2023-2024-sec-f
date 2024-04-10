<?php
require_once('../model/userModel.php');
    $id = $_POST['id'];
    $employeeName = $_POST['employee_name'];
    $contactNo = $_POST['contact_no'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if( updateUser($id, $employeeName, $contactNo, $username, $password)){
        header("Location: ../view/Admin.php");
        exit();
    }

?>