<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $title = "<h1>PAGE 2</h1>" ?>
    <?php $paragraph = "<p>This is the second page.</p>" ?>
    <?php $header = "<header> $title $paragraph </header>" ?>
    <?php echo $header ?>
    <nav>
        <ul>
            <li><a href="page1.php" target="blank">Go to page 1</a></li>
            <li><a href="page3.php" target="blank">Go to page 3</a></li>
            <br>
            <li><a href="index.php" target="blank"><h4>Back to home page</h4></a></li>
        </ul>
    </nav>
    <img src="https://image.tmdb.org/t/p/original/mtqqD00vB4PGRt20gWtGqFhrkd0.jpg" alt="Kungfu Panda poster 2">
</body>
</html>