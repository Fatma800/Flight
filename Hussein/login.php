<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight Management System - Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
       
        <nav>
            <a href="index.php">Home</a>
            <a href="bookings.php">Bookings</a>
            <a href="login.php">Login</a>
            <a href="signup.php">Signup</a>
        </nav>
    </header>
    <main>
        <h1>Login</h1>
        <form action="loginn.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
        </form>
    </main>
   
</body>
</html>
