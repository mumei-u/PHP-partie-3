<?php
/* variable pour remplacer automatiquement la valeur 'ex=1,2,3...' dans header.php */
$exerciseNb = 4;
include '../header.php';
$numberOne = 10;
$numberTwo = 5;
function compare(int $firstval, int $secondval)
{
  if ($firstval > $secondval) {
    return 'Le Premier nombre est plus grand';
  }
  elseif ($firstval < $secondval) {
    return 'Le Premier nombre est plus petit';
  }
  else {
    return 'Les deux nombres sont identiques';
  }
}
?>
</p><?= compare($numberOne, $numberTwo); ?></p>
<?php include '../footer.php'; ?>
