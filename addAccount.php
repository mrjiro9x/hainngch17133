<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form class="formCreate" action="adddingAcc.php" method="post" enctype="multipart/form-data">
    <div class="create">
        <h1>Create A New Account</h1>
        <table>
            <tr>
                <td>Full Name</td>
                <td><input type="text" name="fullname" id="fullname" require></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" id="username" require></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="Password" name="password" id="password" require></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" id="email"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><input type="radio" name="gender" id="gender" value="Male">Male<input type="radio" name="gender" id="gender" value="Female">Female</td>
            </tr>
            <tr>
                <td>Avatar</td>
                <td><input type="file" name="avatar" id="avatar"></td>
            </tr>
        </table>
        <button type="submit" name="submit">CREATE</button>
    </div>
    
    </form>
</body>
</html>