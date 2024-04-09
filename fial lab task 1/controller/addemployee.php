<?php
    require_once('../model/userModel.php');

    $employee_name = $_REQUEST['employee_name'];
    $contact_no = $_REQUEST['contact_no'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if($employee_name == "" || $contact_no == "" || $username == ""|| $password == ""){
        echo "null username/password/email";
    }else {

        $employee = ['employee_name'=> $employee_name,'contact_no'=>$contact_no, 'username'=>$username, 'password'=>$password];
        $status = createUser($employee);
        if($status){
            header('location: ../view/Admin.php');
        }else{
            echo "DB error! Please try again";
        }
    
    }
?>