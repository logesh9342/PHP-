<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>String Operations in PHP</title>
<style>
    body {
        background: linear-gradient(135deg, #1e3c72, #2a5298);
        font-family: "Poppins", sans-serif;
        color: #fff;
        text-align: center;
        margin: 0;
        padding: 50px;
    }

    h1 {
        font-size: 36px;
        margin-bottom: 20px;
        text-shadow: 2px 2px 5px rgba(0,0,0,0.3);
    }

    .container {
        background: rgba(255, 255, 255, 0.1);
        padding: 30px;
        border-radius: 15px;
        width: 60%;
        margin: auto;
        box-shadow: 0 4px 20px rgba(0,0,0,0.3);
        backdrop-filter: blur(10px);
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    td {
        padding: 12px;
        border-bottom: 1px solid rgba(255,255,255,0.2);
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

<h1>!! PHP String Operations !!</h1>
<div class="container">
    <table>
        <?php
        $string = "Welcome to PHP Programming";

        echo "<tr><td>Single Quotes String:</td><td>'$string'</td></tr>";
        echo "<tr><td>Length:</td><td>" . strlen($string) . "</td></tr>";
        echo "<tr><td>Word Count:</td><td>" . str_word_count($string) . "</td></tr>";
        echo "<tr><td>Uppercase:</td><td>" . strtoupper($string) . "</td></tr>";
        echo "<tr><td>Lowercase:</td><td>" . strtolower($string) . "</td></tr>";
        echo "<tr><td>Reversed:</td><td>" . strrev($string) . "</td></tr>";
        echo "<tr><td>Replace 'PHP' with 'Web':</td><td>" . str_replace('PHP', 'Web', $string) . "</td></tr>";
        echo "<tr><td>Position of 'PHP':</td><td>" . strpos($string, 'PHP') . "</td></tr>";
        echo "<tr><td>Trimmed String:</td><td>" . trim('   ' . $string . '   ') . "</td></tr>";
        ?>
    </table>
</div>



</body>
</html>
