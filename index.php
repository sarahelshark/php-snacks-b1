<?php


/*Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 */

$campionatoBasket = [
    "partecipanti" => ["Olimpia Milano", "Cantù"],
    "puntiMatch" => [55, 60],
];

var_dump($campionatoBasket);

foreach ($campionatoBasket as $key => $value) {
    var_dump($key, $value);
};

//altra soluzione
$teams = [
    [
        "home_team" => "Olimpia Milano",
        "guest_team" => "cantu",
        "home_team_score" => rand(1, 20),
        "guest_team_score" => rand(1, 20),
    ],
    [
        "home_team" => "Roma",
        "guest_team" => "Venezia",
        "home_team_score" => rand(1, 20),
        "guest_team_score" => rand(1, 20),
    ],
    [
        "home_team" => "Genova",
        "guest_team" => "Firenze",
        "home_team_score" => rand(1, 20),
        "guest_team_score" => rand(1, 20),
    ],

];

foreach ($teams as $team) {
    var_dump($team);
    echo $team['home_team'] . " - " . $team['guest_team']. " | " . $team['home_team_score'] . " - " . $team['guest_team_score'];  //concatenazione php
};   

?>

<?php
// Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
?>
