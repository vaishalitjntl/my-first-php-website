<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My First PHP Website</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 100px;
            background: #f5f7fa;
        }

        h1 {
            color: #222;
        }

        p {
            font-size: 18px;
        }

        .box {
            width: 500px;
            margin: auto;
            padding: 30px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }
    </style>
</head>

<body>

    <div class="box">

        <h1>Welcome to My First Website 🚀</h1>

        <p>This website is running using GitHub Codespaces.</p>

        <?php
            echo "<p><strong>PHP is working successfully! ✅</strong></p>";
        ?>

    </div>

</body>
</html>