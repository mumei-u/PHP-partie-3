<?php
/* variable pour remplacer automatiquement la valeur 'ex=1,2,3...' dans header.php */
$exerciseNb = 5;
include '../header.php';
$firstNumber = 2019;
$string = 'Nous sommes en';
function concat(int $number, string $string)
{
  return $string . ' ' . $number;
};

?>
<p><?= concat($firstNumber, $string); ?></p>
<?php include '../footer.php'; ?>
