<?php
    require_once('../model/userModel.php');
    if(isset($_POST['search'])) {
        $searchKeyword = $_POST['search'];
        $users = searchUsers($searchKeyword); // Assuming you have a function named searchUsers() to search for users in the database
    } else {
        $users = getAllUser();
    }
    #$users = getAllUser();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
</head>

<body>
    <h1>Admin</h1><br>
    <a href="add_employee.php">Add employee</a>
    <br>
    <br>
    <form method="post" action="">
        <input type="text" name="search" placeholder="Search employee">
        <button type="submit">Search</button>
    </form>

    <br>
    <table border=1>
        <tr>
            <th>Employee name</th>
            <th>Contact no</th>
            <th>username</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
        <?php for($i=0; $i<count($users); $i++){?>
        <tr>
            <td><?php echo $users[$i]['employee_name']; ?></td>
            <td><?=$users[$i]['contact_no'] ?></td>
            <td><?php echo $users[$i]['username']; ?></td>
            <td><?php echo $users[$i]['password']; ?></td>
            <td>
                <a href="edit_user.php?id=<?=$users[$i]['id_e']?>"> EDIT </a> |
                <a href="../controller/delete_user.php?id=<?=$users[$i]['id_e']?>"> DELETE </a> |
            </td>
        </tr>
        <?php } ?>
    </table>
</body>

</html>