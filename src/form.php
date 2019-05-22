<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog Inserter-o-Rama</title>
</head>
<body>
    <h2>Blog Inserter-O-Rama 5000</h2>
    <p>I heard that you bring it.  Fill out your blog info for the world to see.</p>
    <form action="connectikut.php" method="post">
        <p>
            <label for="currentDate">Date:<sup>*</sup></label>
            <input type="date" name="currentDate" id="inputCurrentDate">
        </p>
        <p>
            <label for="blogTitle">Title:<sup>*</sup></label>
            <input type="text" name="title" id="inputTitle" style="width: 670px">
        </p>
        <p>
            <label for="blogGuts">Content:<sup>*</sup></label>
            <textarea name="message" id="inputMessage" rows="10" cols="90"></textarea>
        </p>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
</body>
</html>