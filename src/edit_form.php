<?php
    $link = mysqli_connect('localhost', 'rautus', 'h0lycrapKill_Me', 'autusdb');
    $id = mysqli_real_escape_string($link, $_REQUEST['newsID']);

    if ($link->connect_error) {
        die("Connection failed: " . $link->connect_error);
    }
    $sql = "SELECT blog_date, title, content, id FROM news where id='$id'";
    $result = $link->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="The best scoring page Romel has ever made.">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="style.css">
    <title>Add Post</title>
</head>
<header>
    <a href="/"><img class="logo" alt="Autus.Dev logo" src ="images/logo.PNG"></a>
    <nav>
      <ul style="padding: 0; padding-bottom: 0; margin-left: 0; margin-bottom: 0">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="clients.php">Clients</a></li>
        <li><a href="resume.php">Resume</a></li>
      </ul>
    </nav>
</header>
<body>
    <div class="container">
        <h2>Blog Update-O-Rama 5000</h2>
        <h3>I heard that you bring it.  Fill out your blog info for the world to see.</h3>
        <?php if ($result->num_rows): ?>
            <?php while($row = $result->fetch_assoc()): ?>
                <form action="updooter.php" method="post">
                    <p>
                        <label for="currentDate">Date:<sup>*</sup></label>
                        <input type="date" name="currentDate" id="inputCurrentDate" value="<?= $row['blog_date'] ?>">
                    </p>
                    <p>
                        <label for="blogTitle">Title:<sup>*</sup></label>
                        <input type="text" name="title" id="inputTitle" style="width: 670px" value="<?= $row['title'] ?>">
                    </p>
                    <p>
                        <?php $message = htmlspecialchars($row['content']); ?>
                        <label for="blogGuts">Content:<sup>*</sup></label>
                        <textarea name="message" id="inputMessage" rows="10" cols="90"><?= $message ?></textarea>
                    </p>
                    <input name="newsID" type="hidden" value="<?= $row['id'] ?>">
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                </form>
            <?php endwhile; ?>
        <?php else: ?>
        <p>No records found</p>
        <?php endif; ?>
    </div>
</body>
</html>