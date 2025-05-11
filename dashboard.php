<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);

    echo "<h2>Welcome, $name!</h2>";
    echo "<p>Email: $email</p>";
    echo "<p>Password: $password</p>"; // Do not show in real apps!
} else {
    echo "Invalid access.";
}
?>
