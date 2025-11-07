<!doctype html>
<html>
<head>
    <title>PHP Variables & Datatypes</title>
    <style>
        body {
            font-family: "Poppins", Arial, sans-serif;
            background: linear-gradient(135deg, #00c6ff, #0072ff);
            color: #fff;
            margin: 0;
            padding: 40px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            font-size: 42px;
            margin-bottom: 25px;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: #e0f7fa;
            text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.3);
        }

        .container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 30px;
            width: 90%;
        }

        .card {
            background: rgba(255, 255, 255, 0.15);
            border-radius: 20px;
            padding: 25px;
            width: 420px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
            transition: 0.4s ease;
            text-align: left;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.4);
        }

        h2 {
            font-size: 24px;
            color: #ffeb3b;
            margin-bottom: 15px;
        }

        h3 {
            color: #b2ff59;
            margin-top: 20px;
            margin-bottom: 10px;
        }

        .result {
            background: rgba(0, 0, 0, 0.3);
            padding: 15px;
            border-radius: 10px;
            font-size: 17px;
            line-height: 1.6;
        }

        .result strong {
            color: #ffd54f;
        }

        footer {
            background: rgba(0, 0, 0, 0.3);
            margin-top: 40px;
            padding: 15px 25px;
            border-radius: 15px;
            font-size: 15px;
            color: #e0f7fa;
            box-shadow: 0 4px 15px rgba(0,0,0,0.25);
            backdrop-filter: blur(8px);
        }
    </style>
</head>
<body>

    <h1>PHP Variables & Datatypes</h1>

    <div class="container">
        <div class="card">
            <?php
                // integer variables
                $x = 50;
                $y = 70;

                // float variables
                $a = 45.6;
                $b = 13.4;

                // string variables
                $framework = "Laravel Framework";
                $version = "v2.5.1";

                echo "<h2>About $framework ($version)</h2>";

                echo "<div class='result'>";
                echo "<strong>Integer Addition:</strong> $x + $y = " . ($x + $y) . "<br>";
                echo "<strong>Float Addition:</strong> $a + $b = " . ($a + $b) . "<br>";
                echo "<strong>Mixed Operation:</strong> $x + $a = " . ($x + $a) . "<br>";
                echo "<strong>String Operation:</strong> " . $framework . " — Clean, Modern, Scalable<br>";
                echo "</div>";
            ?>
        </div>

        <div class="card">
            <?php
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
    </div>

    <footer>
        PHP Variables & Datatypes — Visualized
    </footer>

</body>
</html>
