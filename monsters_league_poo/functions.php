<?php

require __DIR__ . '/monster.php';
    
function getMonsters()
{
    try{

        $pdo = new PDO('mysql:host=localhost;dbname=monstre', 'root', 'q^Lmxzaf');
    }

    catch(Exception $e){

        die("Erreur".$e->getMessage());

    }

    $recuperation = $pdo->query('SELECT * FROM monstres');
    while ($donnees = $recuperation ->fetch()) {

        $monstreTemp = new Monster($donnees['nom'],$donnees['strength'],$donnees['life'],$donnees['type']);
        $monstre_array[] = $monstreTemp;

    }
    return $monstre_array;

}

function Ajouter($nom,$strength,$life,$type)
{
    try{

        $pdo = new PDO('mysql:host=localhost;dbname=monstre', 'root', 'q^Lmxzaf');
    }

    catch(Exception $e){

        die("Erreur".$e->getMessage());
    }
            $recuperation = $pdo->query('INSERT INTO `monstres`(`nom`, `strength`, `life`, `type`) VALUES ("'.$nom.'","'.$strength.'","'.$life.'","'.$type.'")');
    
}

/**
 * Our complex fighting algorithm!
 *
 * @return array With keys winning_ship, losing_ship & used_jedi_powers
 */
function fight(Monster $firstMonster, Monster $secondMonster)
{
    $firstMonsterLife = $firstMonster->getlife();
    $secondMonsterLife = $secondMonster->getlife();

    while ($firstMonsterLife > 0 && $secondMonsterLife > 0) {
        $firstMonsterLife = $firstMonsterLife - $secondMonster->getstrength();
        $secondMonsterLife = $secondMonsterLife - $firstMonster->getstrength();
    }

    if ($firstMonsterLife <= 0 && $secondMonsterLife <= 0) {
        $winner = null;
        $looser = null;
    } elseif ($firstMonsterLife <= 0) {
        $winner = $secondMonster;
        $looser = $firstMonster;
    } else {
        $winner = $firstMonster;
        $looser = $secondMonster;
    }

    return array(
        'winner' => $winner,
        'looser' => $looser,
    );
}