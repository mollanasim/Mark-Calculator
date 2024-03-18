


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $totals = $_POST["totals"];
    $rolls = $_POST["rolls"];
    
    foreach ($totals as $index => $total) {
        $roll = $rolls[$index];
        $sql = "INSERT INTO totals (student_roll, total) 
                VALUES ('$roll', '$total')";
        
        if ($conn->query($sql) !== TRUE) {
            echo "Error: " . $sql . "<br>" . $conn->error;
        } else {
            echo "Total marks saved successfully for student roll: $roll<br>";
        }
    }
}

$conn->close();
?>
