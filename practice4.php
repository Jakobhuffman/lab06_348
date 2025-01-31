<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
</head>
<body>
    <h1>Multiplication Table Generator</h1>
    <form method="POST" action="">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" min="1" required>
        <input type="submit" value="Generate Table">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = intval($_POST["number"]);

        echo "<h2>Multiplication Table from 1 to $number</h2>";
        echo "<table border='1' style='border-collapse: collapse;'>";
        
        
        echo "<tr><th>&times;</th>"; // Top-left corner
        for ($i = 1; $i <= $number; $i++) {
            echo "<th>$i</th>";
        }
        echo "</tr>";

        
        for ($i = 1; $i <= $number; $i++) {
            echo "<tr><th>$i</th>"; // Row header
            for ($j = 1; $j <= $number; $j++) {
                echo "<td>" . ($i * $j) . "</td>"; // Cell values
            }
            echo "</tr>";
        }

        echo "</table>";
    }
    ?>
</body>
</html>