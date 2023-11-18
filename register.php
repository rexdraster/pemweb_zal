<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Register</h1>
    <form action="./backend/register.php" method="post">
        Nama:
        <input type="text" name="name" placeholder="masukkan nama anda"><br>
        Email:
        <input type="email" name="email" placeholder="masukkan email anda"><br>
        Password:
        <input type="password" name="password" placeholder="masukkan password anda"><br>
        Confirm:
        <input type="password" name="confirm" placeholder="masukkan konfirmasi password anda"><br>
        
        <input type="submit" value="Register" name="submit">
    </form>

</body>
</html>