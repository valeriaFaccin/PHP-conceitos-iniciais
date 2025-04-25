<?php

echo "Bem-vindo(a) ao Screen Match!\n";

$movieName = "Ford vs Ferrari";
$releaseDate = 2023;

$scores = [];
$qtdScore = $argc - 1;
$scoreSum = 0;

for($i = 1; $i < $qtdScore; $i++) {
    $scores[] = $argv[$i];
}

$movieScore = array_sum($scores) / $qtdScore;

$primeSignature = true;
$includedInCatalog = $primeSignature || $releaseDate < 2024;

echo "Movie Name: $movieName\nMovie score: $movieScore\nRelease date: $releaseDate\n";

if($releaseDate > 2023) {
    echo "This movie has just been released\n";
} elseif ($releaseDate <= 2023 && $releaseDate > 2020) {
    echo "This movie is still recent\n";
} else {
    echo "This movie is old\n";
}

$genre = match ($movieName) {
    'The Wild Robot' => 'adventure',
    'The Godfather' => 'action',
    'The others' => 'psychological horror',
    default => 'unknown'
};

echo "Genre: $genre\n";


$movie = [
    'name' => $movieName,
    'year' => $releaseDate,
    'score' => $movieScore,
    'genre' => $genre
];

var_dump($movie);
