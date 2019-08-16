<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="add.php" method="post" enctype="multipart/form-data">
    <div class="create">
        <h1>Create A New Account</h1>
        <label for="">Full Name</label>
        <input type="text" name="fullname" id="fullname">
        <label for="">Username</label>
        <input type="text" name="username" id="username">
        <label for="">Password</label>
        <input type="Password" name="password" id="password">
        <label for="">Email</label>
        <input type="text" name="email" id="email">
        <label for="">Gender</label>
        <input type="radio" name="gender" id="gender" value="Male">Male
        <input type="radio" name="gender" id="gender" value="Female">Female
        <label for="">Avatar</label>
        <input type="file" name="avatar" id="avatar">
        <button type="submit" name="submit">Submit</button>
    </div>
    </form>
</body>
</html>