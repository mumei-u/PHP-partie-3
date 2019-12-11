<?php
// variable pour remplacer automatiquement la valeur 'ex=1,2,3...' dans header.php
$exerciseNb = 2;
include '../header.php';
$lastname = 'Hello World 2019';
function HelloWorld(string $value)
{
  return $value;
};
?>
<p><?= HelloWorld($lastname); ?></p>
<?php include '../footer.php'; ?>
