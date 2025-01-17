<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .form-container {
            width: 300px;
            margin: auto;
        }
        input[type="text"], input[type="date"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
        }
        input[type="submit"] {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Add Data</h1>
    <div class="form-container">
        <form action="insert_data.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br>
            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
