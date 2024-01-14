<?php
// Données simulées côté backend
$donnees = array(
    array("Nom" => "John", "Âge" => 25, "Ville" => "Paris"),
    array("Nom" => "Alice", "Âge" => 30, "Ville" => "Lyon"),
    array("Nom" => "Bob", "Âge" => 22, "Ville" => "Marseille")
);

// Conversion des données en format JSON pour l'envoi au frontend
$donnees_json = json_encode($donnees);

// Envoi des données au frontend
echo $donnees_json;
?>
