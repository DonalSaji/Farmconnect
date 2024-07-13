<?php require_once('header.php'); ?>

<?php
if(!isset($_REQUEST['id'])) {
	header('location: logout.php');
	exit;
} else {
	// Check the id is valid or not
	$statement = $pdo->prepare("SELECT * FROM blog_posts WHERE id=?");
	$statement->execute(array($_REQUEST['id']));
	$total = $statement->rowCount();
	if( $total == 0 ) {
		header('location: logout.php');
		exit;
	} else {
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
		foreach ($result as $row) {
			$Status = $row['Status'];
		}
	}
}
?>

<?php
if($Status == 'Active') {$final = 'Deactive';} else {$final = 'Active';}
$statement = $pdo->prepare("UPDATE blog_posts SET Status=? WHERE id=?");
$statement->execute(array($final,$_REQUEST['id']));

header('location: blog-details.php');
?>