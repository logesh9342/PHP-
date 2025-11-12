<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Operations in PHP</title>
    <style>
        body {
            background: linear-gradient(135deg, #ff9966, #ff5e62);
            font-family: "Poppins", sans-serif;
            color: #fff;
            text-align: center;
            margin: 0;
            padding: 50px;
        }

        h1 {
            font-size: 36px;
            margin-bottom: 20px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
        }

        .container {
            background: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 15px;
            width: 60%;
            margin: auto;
            box-shadow: 0 4px 25px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        td {
            padding: 12px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        td:first-child {
            font-weight: bold;
            text-align: left;
            width: 40%;
        }

        td:last-child {
            text-align: left;
            color: #ffe082;
        }

        .footer {
            margin-top: 30px;
            font-size: 14px;
            opacity: 0.8;
        }
    </style>
</head>

<body>

    <h1> PHP Arithmetic Operations </h1>
    <div class="container">
        <table>
            <?php
            $a = 25;
            $b = 10;

            echo "<tr><td>First Number (a):</td><td>$a</td></tr>";
            echo "<tr><td>Second Number (b):</td><td>$b</td></tr>";
            echo "<tr><td>Addition (a + b):</td><td>" . ($a + $b) . "</td></tr>";
            echo "<tr><td>Subtraction (a - b):</td><td>" . ($a - $b) . "</td></tr>";
            echo "<tr><td>Multiplication (a × b):</td><td>" . ($a * $b) . "</td></tr>";
            echo "<tr><td>Division (a ÷ b):</td><td>" . ($a / $b) . "</td></tr>";

            ?>
        </table>
    </div>

    <div class="footer">
        PHP Arithmetic Demo
    </div>

</body>

</html>