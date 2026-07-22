<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
    <style>
        body {
            background-image: url('140.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }
        .form-container {
            position: relative;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.75);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }
        .form-container h2 {
            font-size: 24px;
            color: #333;
            font-weight: bold;
        }
        .form-container input, .form-container button {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .form-container button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Welcome to Team Jarvis</h2>
        <?php
        // Database configuration
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "career_guidance";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $database);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Handle form submission
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $is_student = isset($_POST['is_student']) ? 1 : 0;

            // Insert data into the database
            $sql = "INSERT INTO user_submissions (username, email, is_student) VALUES ('$username', '$email', $is_student)";
            
            if ($conn->query($sql) === TRUE) {
                // Redirect to success page with the username in the URL
                header("Location: success.php?username=" . urlencode($username));
                exit();
            } else {
                echo "<p style='color: red;'>Error: " . $sql . "<br>" . $conn->error . "</p>";
            }
        }
        ?>
        <form method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
            <div style="margin: 10px 0;">
                <input type="checkbox" name="is_student"> I am a student
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
