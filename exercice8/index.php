<?php
/* variable pour remplacer automatiquement la valeur 'ex=1,2,3...' dans header.php */
$exerciseNb = 8;
include '../header.php';
$firstNumber = 3;
$secondNumber = 5;
$thirdNumber = 45;
function FunctionName(int $numberOne = 1, int $numberTwo = 1, int $numberThree = 1)
{
  return 'Le somme des trois nombre vaut: ' . ($numberOne + $numberTwo + $numberThree);
}
function unlimitedParam()
{
  // func_get_args renvoi une liste des paramètres entrés.
  $data = func_get_args();
  // for ($i = 0; $i < count($data); $i++) {
  //     $result += $data[$i];
  // }
  foreach ($data as $number) {
    $result += $number;
  }
  return $result;
}
?>
<p><?= unlimitedParam(2,3,4,5,6,7,8,9,10); ?></p>
<?php include '../footer.php'; ?>
