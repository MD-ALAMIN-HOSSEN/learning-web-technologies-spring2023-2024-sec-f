<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup2</title>
   
</head>

<body>
    <form action="singupCheck.php" method="post">
        <div >
            <h1>Signup2</h1>
        </div>
        <div >
            <label for="name">First Name:</label>
            <input type="text" name="First_Name">
        </div>
        <div >    
            <label for="name">Last Name:</label>
            <input type="text" name="Last_Name">
            
        </div>
        <div >
            <label for="email">Email:</label>
            <input type="email" name="email">
           
        </div>

        <div >
            <label for="password">Password:</label>
            <input type="password" name="password">
            
        </div>
        <div >
            <label for="confirm_password">Confirm Password:</label>
            <input type="password" name="confirm_password">
        </div>

          

        <div >
            <label for="date_of_birth">Date of Birth:</label>
            <input type="date" name="date_of_birth" >
        </div>    
         <div >
            <label for="gender">Gender:</label>
            <input type="radio" name="gender" id="male" value="male" >
            <label for="male">Male</label>
            <input type="radio" name="gender" id="female" value="female" >
            <label for="female">Female</label>
            <input type="radio" name="gender" id="other" value="other" >
            <label for="other">Other</label>
        </div>   
            <button type="submit" name="submit">Submit </button>
        
    </form>
</body>

</html>