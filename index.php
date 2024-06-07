<?php
// You can perform any server-side logic here if needed
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coming Soon</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f3f4f6;
            color: #333;
        }
        .coming-soon-container {
            text-align: center;
        }
        .coming-soon-container h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }
        .coming-soon-container p {
            font-size: 24px;
            margin-bottom: 40px;
        }
        .coming-soon-container .newsletter {
            margin-top: 30px;
        }
        .coming-soon-container input[type="email"] {
            padding: 10px;
            font-size: 18px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-right: 10px;
        }
        .coming-soon-container input[type="submit"] {
            padding: 10px 20px;
            font-size: 18px;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .coming-soon-container input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="coming-soon-container">
        <h1>Coming Soon</h1>
        <p>Our website is under construction. We'll be here soon with our new awesome site, subscribe to be notified.</p>
        <div class="newsletter">
            <form action="subscribe.php" method="post">
                <input type="email" name="email" placeholder="Enter your email" required>
                <input type="submit" value="Notify Me">
            </form>
        </div>
    </div>
</body>
</html>
