<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $title = "<h1>PAGE 3</h1>" ?>
    <?php $paragraph = "<p>This is the third page.</p>" ?>
    <?php $header = "<header> $title $paragraph </header>" ?>
    <?php echo $header ?>
    <nav>
        <ul>
            <li><a href="page1.php" target="blank">Go to page 1</a></li>
            <li><a href="page2.php" target="blank">Go to page 2</a></li>
            <br>
            <li><a href="index.php" target="blank"><h4>Back to home page</h4></a></li>
        </ul>
    </nav>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRkR24HvC3Nklsg7vidAjaVfD34vPGfq3GR1FFB8ib9Msm2HD4fTCrWbvRQ&s=10" alt="Kungfu Panda poster 3">
</body>
</html>