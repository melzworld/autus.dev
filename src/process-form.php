<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
</head>
<body>
    <h1>Thank You</h1>
    <p>Here is the information you have submitted:</p>
    <ol>
        <li><em>Date:</em> <?php echo $_POST["currentDate"]?></li>
        <li><em>Title:</em> <?php echo $_POST["title"]?></li>
        <li><em>Content:</em> <?php echo $_POST["message"]?></li>
    </ol>
</body>
</html>