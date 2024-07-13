<?php require_once('header.php'); ?>

<?php
if(!isset($_REQUEST['id'])) {
	header('location: logout.php');
	exit;
} else {
	// Check the id is valid or not
	$statement = $pdo->prepare("SELECT * FROM user WHERE id=?");
	$statement->execute(array($_REQUEST['id']));
	$total = $statement->rowCount();
	if( $total == 0 ) {
		header('location: logout.php');
		exit;
	} else {
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
		foreach ($result as $row) {
			$user_type = $row['user_type'];
		}
	}
}
?>

<?php
if($user_type == 'user') {$final = 'co-admin';} else {$final = 'user';}
$statement = $pdo->prepare("UPDATE user SET user_type=? WHERE id=?");
$statement->execute(array($final,$_REQUEST['id']));

header('location: customer.php');
?>