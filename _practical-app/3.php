<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>

	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

 $lovePhp = "I love PHP";

 if ($lovePhp) {
 	echo $lovePhp;

} elseif (!$lovePhp) {
	echo "Who doesn't love PHP?";

} else {
	echo "PHP";
}

echo "<br>";

for ($i=0; $i < 11; $i++) {
	echo "{$i} <br>";
}

$number = 10;

switch ($number) {
	case 10:
		echo "The number is {$number}";
		break;

	default:
		echo "There is no number";
		break;
}

?>






</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
