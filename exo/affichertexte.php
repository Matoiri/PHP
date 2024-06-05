<?php
$users = [
    [
        'full_name' => 'Mickaël Andrieu',
        'email' => 'mickael.andrieu@exemple.com',
        'age' => 34,
    ],
    [
        'full_name' => 'Mathieu Nebra',
        'email' => 'mathieu.nebra@exemple.com',
        'age' => 34,
    ],
    [
        'full_name' => 'Laurène Castor',
        'email' => 'laurene.castor@exemple.com',
        'age' => 28,
    ],
];
$lines = 3; // nombre d'utilisateurs dans le tableau
$counter = 0;
while ($counter < $lines) {
    echo $users[$counter]['full_name'] . ' ' . $users[$counter]['email'] . '<br />';
    $counter++;
}
?>