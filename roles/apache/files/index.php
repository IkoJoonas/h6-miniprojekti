<?php
echo "<h1>LAMP stack toimii!</h1>";
echo "<p>PHP toimii Apache-palvelimella.</p>";

$mysqli = new mysqli("localhost", "testuser", "testpass", "testdb");

if ($mysqli->connect_errno) {
    echo "<p>Yhteys tietokantaan epäonnistui: " . $mysqli->connect_error . "</p>";
} else {
    echo "<p>Yhteys MariaDB:hen OK!</p>";
}
?>
