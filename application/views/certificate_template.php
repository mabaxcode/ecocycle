<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
            text-align: center;
            margin: 0;
        }
        .certificate-content {
            position: relative;
            z-index: 1; /* Ensure content appears over background */
            width: 80%;
            margin: 0 auto;
        }
        h1 {
            margin-bottom: 20px;
        }
        p {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="certificate-content">
        <h1><?= $title ?></h1>
        <p>This is to certify that</p>
        <h2><?= $name ?></h2>
        <p>has successfully completed the required program on</p>
        <p><?= $date ?></p>
    </div>
</body>
</html>
