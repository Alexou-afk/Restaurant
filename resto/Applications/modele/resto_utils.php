<?php
namespace resto;
require_once 'db_utils.php';

function get4()
{
    $pdo=connect();
    $resultat = $pdo->query('SELECT c.idR,sum(note)/count(note), cheminP FROM `critiquer` as c
                            INNER JOIN photo as p
                            on c.idR = p.idR
                            WHERE c.idR = 4');
    $res = $resultat->fetchAll();
    disconnect();
    return $res;
}