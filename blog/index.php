<?php 
    include('config/connect.php');
    $sql = 'SELECT title, content, tags, id, created_at FROM posts';
	//$sql = 'SELECT * FROM myTable ORDER BY created_at';
	// make query and get results
	$result = mysqli_query($conn, $sql);

	//store each row of the assoc array into an declared array
	while($row = mysqli_fetch_assoc($result)){
		$posts[] = $row;
	}
	// reverse the array
	$posts = array_reverse($posts ,true);
	mysqli_free_result($result);
	mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="/blog/style.css">
<head>
</head>
<?php include($_SERVER['DOCUMENT_ROOT'].'/templates/header.php'); ?>
<body>
<section class="container">
	<!-- code below for header when using login feature -->
	<!-- <div class="headerDiv">
		<h1>My Blog</h1>
		<hr>
		<div class="login">Login</div><div class="sign">Sign Up</div>
	</div> -->
	<div class="outer">
		<?php foreach ($posts as $post): ?>
			<div class="posts">
				<h1 class="title"><?php echo $post['title'] ?></h1>
				<h3 class="tags">Posted <?php echo date('m-d-Y', strtotime($post['created_at'])) ?> | 
								Tags: <?php echo $post['tags'] ?></h3>
				<p class="para"> <?php echo $post['content'] ?></p>
			</div>
		<?php endforeach; ?>
	</div>
</section>
<?php include($_SERVER['DOCUMENT_ROOT'].'/templates/footer.php'); ?>
</body>
</html>