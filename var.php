<!doctype html>
<html>
<head>
    <title>PHP Variable Operations</title>
    <style>
        body {
            font-family: "Poppins", Arial, sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: #fff;
            text-align: center;
            margin: 0;
            padding: 50px;
            min-height: 100vh;
        }

        h1 {
            font-size: 40px;
            margin-bottom: 25px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .box {
            background: rgba(255, 255, 255, 0.15);
            border-radius: 20px;
            padding: 30px;
            margin: 30px auto;
            width: 70%;
            box-shadow: 0 8px 30px rgba(0,0,0,0.25);
            transition: all 0.4s ease;
        }

        .box:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 40px rgba(0,0,0,0.35);
        }

        h2, h3 {
            margin: 20px 0;
            color: #ffe082;
        }

        .result {
            background: rgba(0, 0, 0, 0.4);
            padding: 15px;
            border-radius: 12px;
            font-size: 18px;
            margin-top: 10px;
            text-align: left;
            display: inline-block;
        }

        .result strong {
            color: #ffd54f;
        }

        footer {
            margin-top: 40px;
            font-size: 14px;
            opacity: 0.85;
        }
    </style>
</head>
<body>

    <h1>PHP Variable & datatypes</h1>

    <div class="box">
        <?php
            // integer variables
            $x = 15;
            $y = 35;

            // float variables
            $a = 22.8;
            $b = 9.7;

            // string variables
            $framework = "Laravel";
            $version = "v0009";

            echo "<h2>Exploring $framework ($version)</h2>";

            echo "<div class='result'>";
            echo "<strong>Integer Addition:</strong> $x + $y = " . ($x + $y) . "<br>";
            echo "<strong>Float Addition:</strong> $a + $b = " . ($a + $b) . "<br>";
            echo "<strong>Mixed Operation:</strong> $x + $a = " . ($x + $a) . "<br>";
            echo "<strong>String operation:</strong> " . $framework . " — Smarter, Faster, Better<br>";
            echo "</div>";

            echo "<h3>Type Information:</h3>";
            echo "<div class='result'>";
            var_dump($x);
            echo "<br>";
            var_dump($a);
            echo "<br>";
            var_dump($framework);
            echo "</div>";
        ?>
    </div>

    <footer style="background-color: #764ba2; padding:20px; color: black;">
        PHP variables and datatypes
    </footer>

</body>
</html>
