<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div align="center">
        <h1>Welcome to Survey Page Please Register Yourself for Support!</h1>
        <form name="uForm" action="Insert.php" method="post">
            <label for="">First Name:</label>
            <br>
            <input type="text" name="ufName" id="ufName">
            <br><br>
            <label for="">Last Name:</label>
            <br>
            <input type="text" name="ulName" id="ulName">
            <br><br>
            <input type="submit" name="sub" value="Register">
        </form>
       
    </div>
</body>
</html>