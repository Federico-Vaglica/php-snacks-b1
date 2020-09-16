<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $match = [
        [
            'home' => 'Palermo',
            'ospite' => 'Catania',
            'score_home' => rand(3, 8),
            'score_ospite' => rand(1, 2),
          ],
          [
            'home' => 'Milan',
            'ospite' => 'Inter',
            'score_home' => rand(1, 2),
            'score_ospite' => rand(1, 6),
          ],
          [
            'home' => 'Lazio',
            'ospite' => 'Atalanta',
            'score_home' => rand(1, 6),
            'score_ospite' => rand(1, 6),
          ],
          [
            'home' => 'Bari',
            'ospite' => 'Foggia',
            'score_home' => rand(1, 6),
            'score_ospite' => rand(1, 2),
          ],
          [
            'home' => 'Fiorentina',
            'ospite' => 'Livorno',
            'score_home' => rand(1, 6),
            'score_ospite' => rand(1, 6),
          ]
    ]
    ?>

    <h3>Risultati Partite</h3>
    <ul>
    <?php for($i=0; $i<count($match); $i++) :?>
        <li>
            <?php echo $match[$i]['home'];?> -<?php echo $match[$i]['ospite'];?>
            <?php echo $match[$i]['score_home'];?> -<?php echo $match[$i]['score_ospite'];?>
        </li>
    <?php endfor;?>
    </ul>


</body>
</html>