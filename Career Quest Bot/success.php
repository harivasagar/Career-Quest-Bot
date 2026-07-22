<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Your Path</title>
    <style>
        body {
            background-image: url('140.jpg'); /* Replace '3.jpg' with your background image path */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
        }

        .welcome-message {
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 24px;
            font-weight: bold;
            color: #fff;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px 20px;
            border-radius: 5px;
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.7);
        }

        .heading {
            font-size: 48px;
            font-weight: bold;
            color: #fff;
            margin-bottom: 50px;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.7);
            letter-spacing: 2px;
        }

        .options-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 40px;
            width: 80%;
            max-width: 1200px;
        }

        .option-box {
            background-color: rgba(216, 191, 216, 0.7); /* Light purple with high transparency */
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out;
            cursor: pointer;
            text-align: center;
        }

        .option-box:hover {
            transform: scale(1.05);
        }

        .option-box h2 {
            font-size: 32px;
            color: white; /* Text color changed to white */
            margin-bottom: 20px;
            font-weight: bold;
        }

        .option-box p {
            font-size: 18px;
            color: white; /* Text color changed to white */
            margin-bottom: 20px;
        }

        .option-box a {
            text-decoration: none;
            display: block;
            margin-top: 20px;
            padding: 15px;
            background-color: #007BFF; /* Blue color for the Explore button */
            color: white;
            border-radius: 8px;
            font-size: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .option-box a:hover {
            background-color: #0056b3; /* Darker blue on hover */
        }

        @media screen and (max-width: 768px) {
            .options-container {
                grid-template-columns: 1fr;
                gap: 20px;
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <!-- Welcome Message -->
    <div class="welcome-message">
        <?php
        if (isset($_GET['username'])) {
            $username = htmlspecialchars($_GET['username']);
            echo "Welcome, $username!";
        } else {
            echo "Welcome!";
        }
        ?>
    </div>

    <!-- Heading -->
    <div class="heading">Choose Your Path</div>

    <!-- Options Container -->
    <div class="options-container">
        <div class="option-box">
            <h2>Job Reference</h2>
            <p>Find the right career opportunities tailored for you.</p>
            <!-- Replace the # with the URL for Job Reference -->
            <a href="https://app.chatgptbuilder.io/webchat/?p=1387594">Explore</a>
        </div>
        <div class="option-box">
            <h2>Higher Studies</h2>
            <p>Pursue advanced education and expand your knowledge.</p>
            <!-- Replace the # with the URL for Higher Studies -->
            <a href="https://app.chatgptbuilder.io/webchat/?p=1833957">Explore</a>
        </div>
    </div>
</body>
</html>
