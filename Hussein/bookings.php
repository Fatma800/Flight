<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight Management System - Bookings</title>
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
        <h1>Book a Flight</h1>
        <form action="book.php" method="POST">
            <label for="flight_number">Flight Number:</label>
            <input type="text" id="flight_number" name="flight_number" required>
            <label for="seat_number">Seat Number:</label>
            <input type="text" id="seat_number" name="seat_number" required>
            <button type="submit">Book Flight</button>
        </form>
    </main>
    
</body>
</html>
