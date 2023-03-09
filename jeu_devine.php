<?php
// Génération d'un nombre aléatoire entre 1 et 100
$nombre = rand(1, 100);

// Nombre maximal d'essais pour le joueur
$maxEssais = 5;

// Initialisation du compteur d'essais
$compteurEssais = 0;

// Boucle de jeu
while ($compteurEssais < $maxEssais) {
    // Demande à l'utilisateur de deviner le nombre
    echo "Devinez un nombre entre 1 et 100 : ";
    $guess = intval(readline());

    // Vérifie si la réponse de l'utilisateur est correcte
    if ($guess === $nombre) {
        echo "Bravo, vous avez deviné le nombre !\n";
        break;
    } else {
        // Si la réponse de l'utilisateur est incorrecte, donne une indication
        if ($guess < $nombre) {
            echo "Le nombre est plus grand.\n";
        } else {
            echo "Le nombre est plus petit.\n";
        }
    }

    // Augmente le compteur d'essais
    $compteurEssais++;
}

// Si le joueur a utilisé tous ses essais sans trouver le nombre, affiche le résultat
if ($compteurEssais === $maxEssais) {
    echo "Désolé, vous avez utilisé tous vos essais. Le nombre était $nombre.\n";
}
