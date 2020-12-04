<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marvel <?php echo $title; ?></title>
</head>

<body>

    <nav>
        <ul>
            <li>Home</li>
            <li>Other</li>
        </ul>
    </nav>

    <h3><?php echo $headerTitle; ?></h3>

    <main>
        <?php
            include $main_content; 
        ?>
    </main>

    <footer>
        <p>Footer</p>
    </footer>

</body>

</html>