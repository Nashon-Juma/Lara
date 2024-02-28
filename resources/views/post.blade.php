<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Dodo</title>

</head>
<body>
    <center><?php foreach($posts as $post): ?>
    <article class="ded">
        <p >
            <?= $post ."<hr> <br>" ?>

        </p>
    </article>
    <?php endforeach;?></center>

</body>
</html>


