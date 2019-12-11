<?php
/* variable pour remplacer automatiquement la valeur 'ex=1,2,3...' dans header.php */
$exerciseNb = 7;
include '../header.php';
$gender = 'Homme';
$age = 23;
function genderAndAge(string $gender, int $age)
{
  if ($gender == 'Homme' && $age >= 18) {
    return 'Vous etes un ' . $gender . ' majeur, vous avez ' . $age . 'ans.';
  }
  elseif ($gender == 'Homme') {
    return 'Vous etes un ' . $gender . ' mineur, vous avez ' . $age . 'ans.';
  }
  elseif ($age >= 18) {
    return 'Vous etes une ' . $gender . ' majeur, vous avez ' . $age . 'ans.';
  }
  else {
    return 'Vous etes une ' . $gender . ' mineur, vous avez ' . $age . 'ans.';
  }
}
?>
<p><?= genderAndAge($gender, $age); ?></p>
<?php include '../footer.php'; ?>
