<?php
/* variable pour remplacer automatiquement la valeur 'ex=1,2,3...' dans header.php */
$exerciseNb = 6;
include '../header.php';
$firstName = 'Lobato Leao';
$lastName = 'Thyago';
$year = 20;
function concat($firstName, $lastName, $year)
{
  return 'Bonjour ' .$lastName. ' ' .$firstName. ', vous avez ' .$year. ' ans.';
}
?>
<p><?= concat($firstName, $lastName, $year); ?></p>
<?php include '../footer.php'; ?>
