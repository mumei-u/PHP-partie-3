<?php
// variable pour remplacer automatiquement la valeur 'ex=1,2,3...' dans header.php
$exerciseNb = 3;
include '../header.php';
$hello = 'Hello';
$world = 'World';

function concat(string $first, string $second)
{
  return $first . ' ' . $second;
}
function getFullName(string $firstName, string $lastName)
{
  return $firstName . ' ' . $lastName;
}
$fullName = getFullName('Hebert', 'Louis-bernard');
?>
<?= concat($hello, $world); ?>
<?php include '../footer.php'; ?>
