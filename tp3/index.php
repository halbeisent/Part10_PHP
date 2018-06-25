<?php
$portrait1 = array('name' => 'Victor', 'firstname' => 'Hugo', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
$portrait2 = array('name' => 'Jean', 'firstname' => 'de La Fontaine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
$portrait3 = array('name' => 'Pierre', 'firstname' => 'Corneille', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
$portrait4 = array('name' => 'Jean', 'firstname' => 'Racine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');
$allPortraits = array($portrait1, $portrait2, $portrait3, $portrait4);
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>TP3 Partie 10 PHP</title>
    </head>
    <body>
        <?php

        function deadPeople($allPortraits ) {
            $resultDisplay = '';
            foreach ($allPortraits as $name => $nameInfo) {
                $resultDisplay .= $allPortraits['$name'];
            }
            return $resultDisplay;
        }
        ?>
        <?php echo deadPeople($allPortraits); ?>
    </body>
</html>
