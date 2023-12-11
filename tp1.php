<?php

// Define multidimensional arrays for each person

echo "<h1>Tableau de tableaux associatifs</h1><br>";

$person1 = array(
    "name" => "Ganesh",
    "age" => 52,
    "gender" => "Homme"
);

$person2 = array(
    "name" => "Sarah",
    "age" => 28,
    "gender" => "Femme"
);

$person3 = array(
    "name" => "Gildas",
    "age" => 38,
    "gender" => "Homme"
);

// Table containing each person
$people = array($person1, $person2, $person3);

// Function to display a person
function displayPerson($person) {
    echo "Name: " . $person['name'] . "<br>";
    echo "Age: " . $person['age'] . "<br>";
    echo "Gender: " . $person['gender'] . "<br><br>";
}

// Call the function to display each person
foreach ($people as $person) {
    displayPerson($person);
}
?>