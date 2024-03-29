<?php
$servername="sql6.freesqldatabase.com";

$username="sql6695077";

$password="r197wUzbtW";

$dbname="sql6695077";

$connection=mysqli_connect($servername,$username,$password,$dbname);
	
?>
<!DoCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>URL Shortener</title>
	<link rel="stylesheet" href="main.css" />
</head>
<body>
	
	<header>
		<h1>JWA URL Shortener</h1>
	</header>
	<main>
		<section class="form">
			<form action="add/index.php" method="post">
				<input type="text" name="long_url" id="long_url" placeholder="e.g. https://example.com" />
				<input type="submit"value="SHORTEN" />
			</form>
		</section>
		
		<section class="urls">
		<?php 
		$query = "SELECT * FROM urls";
		$result = mysqli_query($connection, $query);
		
		
		$urls = array();
		if ($result) {
		    while ($row = mysqli_fetch_assoc($result)) {
		        $urls[] = $row;
		    }
		}
		
		foreach ($urls as $url) :?>
		<div class="url">
				<div class="id">
					<?= $url['id']; ?>
				</div>
				<div class="short_url">
					<a href="http://localhost/urlshortner/r?c=<?= $url['id']; ?>" target="_blank">
					http://localhost/urlshortner/r?c=<?= $url['id']; ?> 
					</a>
				</div>
				<div class="long_url">
					<a href="<?= $url['long_url']; ?>" target="_blank"><?= $url['long_url']; ?></a>
				</div>
			</div>
			<?php endforeach; ?>
			
			</section>		
	</main>
</body>
</html>
