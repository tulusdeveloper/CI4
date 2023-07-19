<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title; ?></title>
</head>
<body>
    <H1><?= $page_heading; ?></H1>
    <h3>Subjects List</h3>
    <ul>
        <?php
        foreach($subject as $sub):
            ?>
            <li><?= $sub; ?></li>
            <?php
        endforeach;
        ?>
    </ul>
</body>
</html>