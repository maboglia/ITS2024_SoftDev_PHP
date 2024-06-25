<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php include 'funzioni.php'; ?> 

    <?= createTitle('Titolo principale'); ?>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, amet! Consectetur in suscipit veniam rerum eius quo officia. Deserunt similique voluptatem dolore facere ullam delectus, quidem commodi ab laboriosam atque.</p>


    <?=  createTitle('Titolo secondario', 2); ?>
    
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, amet! Consectetur in suscipit veniam rerum eius quo officia. Deserunt similique voluptatem dolore facere ullam delectus, quidem commodi ab laboriosam atque.</p>
 
    <?=  createPar('mio paraGRAFO '); ?>

    <?=  createList(['pane', 'burro', 'marmellata']); ?>


</body>
</html>