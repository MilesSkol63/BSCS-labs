<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $title = "<h1>HOME PAGE</h1>" ?>
    <?php $paragraph = "<p>This is the landing page.</p>" ?>
    <?php $header = "<header> $title $paragraph </header>" ?>
    <?php echo $header ?>
    <nav>
        <ul>
            <li><a href="page1.php" target="blank">Go to page 1</a></li>
            <li><a href="page2.php" target="blank">Go to page 2</a></li>
            <li><a href="page3.php" target="blank">Go to page 3</a></li>
        </ul>
    </nav>
    <img src="https://static.wikia.nocookie.net/dreamworks/images/8/8c/JadePalaceDW.jpg/revision/latest?cb=20150530204741" alt="Panda Home">
</body>
</html>