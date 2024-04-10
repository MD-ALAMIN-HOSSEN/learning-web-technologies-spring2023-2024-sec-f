<?php

require_once('../model/userModel.php');

    $id = $_GET['id'];
    $user =getUserById($id);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
</head>

<body>
    Fill the employee details : <br><br>
    <form method="post" action="../controller/update_user.php" enctype="">
        <input type="hidden" name="id" value="<?php echo $user['id_e']; ?>">
        Employee name <input type="text" name="employee_name" value="<?php echo $user['employee_name']; ?>"> <br>
        Contact no <input type="tel" name="contact_no" value="<?=$user['contact_no'] ?>"><br>
        username <input type="text" name="username" value="<?php echo $user['username']; ?>"><br>
        Password <input type="password" name="password" value="<?php echo $user['password']; ?>"><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>