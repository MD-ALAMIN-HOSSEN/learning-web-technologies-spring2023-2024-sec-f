<?php
    

    function validateName($fnam, $allowedChars) {

        for ($i = 0; $i < strlen($fnam); $i++) {
            $charValid = false;
            foreach (str_split($allowedChars) as $allowedChar) {
                if ($fnam[$i] === $allowedChar) {
                    $charValid = true;
                    break;
                }
            }
            if (!$charValid) {
                return false;
            }
        }
        $firstChar = $fnam[0];
        if (!ctype_alpha($firstChar)) {
            return false;
        }

        return true;
    }
    
    
    $fname=$lname=$pass=$confirmpass=$dbo=$gender=$email=$err_fname=$err_lname=$err_pass=$err_confirmpass=$err_gender=$err_dbo=$err_email="";
    $error=false;

    if(isset($_POST['submit'])){
       $fname=$_POST['First_Name'];
       $lname=$_POST['Last_Name'];
       $pass=$_POST['password'];
       $confirmpass=$_POST['confirm_password'];
       $email=$_POST['email'];
       $dbo=$_POST['date_of_birth'];
       if(isset($_POST['gender'])){
        $gender = $_POST['gender'];
    }
    $allowedChars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ.-';
       if($fnam=""){
           $err_fname=" Give First Name<br>";
           echo $err_fname;
           validateName($fnam,$allowedChars);
           $error=true;
           
       }
   
       if($lname==""){
         $err_lname="Give Last_Name<br>";
         echo $err_lname;
         $error=true;
         
     }

     if($email==""){
        $err_email="Give mail<br>";
        echo $err_email;
        $error=true;
        
      }
      
     if($pass==""){
       $err_pass="Give password<br>";
       echo $err_pass;
       $error=true;
       
   }
   if($confirmpass==""){
     $err_confirmpass="Give confirm password<br>";
     echo $err_confirmpass;
     $error=true;
     
   }
   if($confirmpass!=""&&$confirmpass!=$pass){
       $err_confirmpass="password and confirm password doesn't match<br>";
       echo $err_confirmpass;
       $error=true;
       
     }
   

   if($dbo==""){
    $err_dbo=" Give Date of birth<br>";
    echo $err_dbo;
    $error=true;
    
}
if($gender==""){
    $err_gender=" Give Gender<br>";
    echo $err_gender;
    $error=true;
    
}

    if(!$error){
       echo "All inputs are validated and correct.";
    }   
    
}
?>