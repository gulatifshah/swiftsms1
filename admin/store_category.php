
<?php  
	require 'config/dbc.php';

	$date = $_POST['create_date'];
	$title = $_POST['title'];
	$slug = $_POST['slug'];
	$status = "DEACTIVE";
	$meta_description = $_POST['meta_description'];
	$meta_keyword = $_POST['meta_keyword'];

	$query = mysqli_query($connection, "SELECT title FROM category WHERE title='$title'") or die(mysqli_error($connection));
	if (mysqli_num_rows($query) > 0 ) {
		echo "<h1>" . $title . " already taken" . "</h1>";
	}
	else {
		mysqli_query($connection, "INSERT INTO category(create_date, title, slug, status, meta_description, meta_keyword)
					VALUES('$date', '$title', '$slug', '$status', '$meta_description', '$meta_keyword')") or die(mysqli_error($connection));

		header("Location:category.php");

	}


?>