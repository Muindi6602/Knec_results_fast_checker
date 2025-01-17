<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KNEC Results Checker</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>KNEC Results Checker</h1>
        <form id="resultsForm" action="Output" method="POST">
            <label for="index_number">Kcse Index:</label>
            <input type="text" id="index_number" name="index_number" placeholder="Enter index number..." required>
            
            <label for="registered_name">Registered Name:</label>
            <input type="text" id="registered_name" name="registered_name" placeholder="Enter your name..." required>
            
            <button type="submit" id="submitBtn">View Results</button>
        </form>
    </div>
</body>
</html>
