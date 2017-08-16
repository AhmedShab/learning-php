
<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>

		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">


	<?php

/*  Step1: Make a form that submits one value to POST super global


 */

 if ($_POST) {
	 print_r($_POST);
	 echo "<br>";
	 echo "your name that was submitted into the form was {$_POST["name"]}";
 }
?>

<form class="" action="6.php" method="post">
	Name: <input type="text" name="name" value="">
</form>


</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>
