<?php

// En ambos casos ya sea el uso de comillas simples o dobles el uso de etiqutas html sí se reconoce

// Comillas simples

echo 'Texto de una línea
o de varias 
pero se escribe en una sola en el browser 
escapar carateres 
comilla: \' 
backslash \\
$variable <br>';

// Comillas dobles

$name = 'Sofia';

echo "<br>Mi nombre es $name <br>";

// Si se usan comillas simples es necesario concatenar
echo '<br>Mi nombre es ' . $name;

$courses = [
  'backend' => [
    'PHP',
    'Laravel'
  ]
];

class User
{
  public $name = 'Sof';
}

$user = new User;
echo "<br>$user->name<br>";

// Se usan los bigotes para estructuras más complejas, es decir, más anidadas
echo "<br>{$courses['backend'][0]}<br>";
echo "<br>{$courses['backend'][1]}<br>";

echo "<br> $user->name quiere aprender {$courses['backend'][0]} <br>";

// Variables variables

$teacher = 'Sofia';
$Sofia = 'Bots developer';

// se accede a las variables de forma dinámica es como usas $$
echo "<br>$teacher es ${$teacher}<br>";

function getTeacher()
{
  return 'teacher';
}

$teacher = 'Rick';

echo "{${getTeacher()}} enseña PHP";

