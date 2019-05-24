<?php
    $link = mysqli_connect('localhost', 'rautus', 'h0lycrapKill_Me', 'autusdb');

    if ($link->connect_error) {
        die("Connection failed: " . $link->connect_error);
    }
    $sql = "SELECT blog_date, title, content FROM news ORDER BY create_date DESC ";
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
    <title>Welcome to Autus.Dev</title>
  </head>
  <header>
    <a href="/"><img class="logo" alt="Autus.Dev logo" src ="images/logo.PNG"></a>
    <nav>
      <ul style="padding: 0; padding-bottom: 0; margin-left: 0; margin-bottom: 0">
        <li><a href="/">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="clients.php">Clients</a></li>
        <li><a href="resume.php">Resume</a></li>
      </ul>
    </nav>
  </header>
<body>
  <div class="container">
    <section>
    <h1>Latest News</h1>
    <hr>
    </section>
    <?php if ($result->num_rows): ?>
      <?php while($row = $result->fetch_assoc()): ?>
        <article>
          <?php $date = date_create($row['blog_date']); ?>
          <h2><?= date_format($date, "F j, Y") ?></h2>
          <h3><?= $row['title'] ?></h3>
          <p><?= $row['content'] ?></p>
        </article>
      <?php endwhile; ?>
    <?php else: ?>
    <p>No records found</p>
    <?php endif; ?>
  </div>
</body>
  <footer>
    <hr>
    <p>2019 - Autus.Dev</p>
  </footer>
</html>

<?php
    $link->close();
?>