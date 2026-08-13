<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $title = "<h1>PAGE 1</h1>" ?>
    <?php $paragraph = "<p>This is the first page.</p>" ?>
    <?php $header = "<header> $title $paragraph </header>" ?>
    <?php echo $header ?>
    <nav>
        <ul>
            <li><a href="page2.php" target="blank">Go to page 2</a></li>
            <li><a href="page3.php" target="blank">Go to page 3</a></li>
            <br>
            <li><a href="index.php" target="blank"><h4>Back to home page</h4></a></li>
        </ul>
    </nav>
    <img src="https://media-cache.cinematerial.com/p/500x/fxbwpt6b/kung-fu-panda-movie-poster.jpg?v=1456294859" alt="Kungfu Panda poster 1">
</body>
</html>