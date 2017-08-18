<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
<?php include "mysql/db.php"; ?>


	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>


		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">



	<?php

	/*  Step 1 - Create a database in PHPmyadmin

		Step 2 - Create a table like the one from the lecture

		Step 3 - Insert some Data

		Step 4 - Connect to Database and read data

*/

connect();
insert_into_table();
get_students_data();


	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
