<?php
// Snack 1: array numerico
$matches = [
  [
    ["squadra1", "14"],
    ["squadra2", "15"]
  ],

  [
    ["squadra3", "17"],
    ["squadra4", "19"]
  ]
];

echo "Snack 1 svolto con array numerico <br><br>";

for($i = 0; $i < count($matches); $i++) {
  echo $matches[$i][0][0] . " - " . $matches[$i][1][0] . " | " . strval($matches[$i][0][1]) . " - " . strval($matches[$i][1][1]) . "<br>";
};

echo "<br><hr><br>";

// Snack 1: array associativo
$matchesAssoc = [
  [
    "squadraCasa" => "squadra1",
    "squadraOspite" => "squadra2",
    "puntiSquadraCasa" => 14,
    "puntiSquadraOspite" => 15
  ],

  [
    "squadraCasa" => "squadra3",
    "squadraOspite" => "squadra4",
    "puntiSquadraCasa" => 17,
    "puntiSquadraOspite" => 19
  ]
];

echo "Snack 1 svolto con array associativo <br><br>";

for($l = 0; $l < count($matchesAssoc); $l++) {
  echo $matchesAssoc[$l]["squadraCasa"] . " - " . $matchesAssoc[$l]["squadraOspite"] . " | " . strval($matchesAssoc[$l]["puntiSquadraCasa"]) . " - " . strval($matchesAssoc[$l]["puntiSquadraOspite"]) . "<br>";
};

echo "<br><hr><br>";

// Snack 2
// query utilizzata: ?name=Tizio&mail=fake@email.com&age=9999
$userData = $_GET;

if(strlen($userData["name"]) > 3 && strpos($userData["mail"], "@") !== false && strpos($userData["mail"], ".") !== false && is_numeric($userData["age"])) {
    echo "Accesso riuscito";
} else {
    echo "Accesso negato";
};