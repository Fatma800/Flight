<?php
session_start();
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['user_id'])) {
    $flight_number = $_POST['flight_number'];
    $seat_number = $_POST['seat_number'];
    $user_id = $_SESSION['user_id'];

    $stmt = $pdo->prepare("SELECT id FROM flights WHERE flight_number = :flight_number");
    $stmt->execute(['flight_number' => $flight_number]);
    $flight = $stmt->fetch();

    if ($flight) {
        $stmt = $pdo->prepare("INSERT INTO bookings (user_id, flight_id, seat_number) VALUES (:user_id, :flight_id, :seat_number)");
        if ($stmt->execute(['user_id' => $user_id, 'flight_id' => $flight['id'], 'seat_number' => $seat_number])) {
            echo "Booking successful!";
        } else {
            echo "Error occurred during booking.";
        }
    } else {
        echo "Flight not found.";
    }
} else {
    echo "You need to log in to book a flight.";
}
?>
