<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>


		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">


	<?php


/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

 $smallest = min(1, 20, 30, 50);

 print $smallest . "<br>";

 $names = "Ahmed,Peter,Jack";
 $namesToArray = explode(",", $names);

 foreach ($namesToArray as $name) {
 	print "{$name} <br>";
 }

 array_pop($namesToArray);
 print_r($namesToArray);




?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>
