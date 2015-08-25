<?php
	$con_dns = "mysql:host=localhost;dbname=database";
$con_user = 'root';
$con_pass = '';
$db = new PDO ( $con_dns, $con_user, $con_pass);

$result = $db->query( "select * from dbuser");
?>

<?php

	echo 'Xoa User'; echo '<br/>'; echo 'Xoa user co ID la: '; echo $_GET['id']; echo '<br/>';

	if(isset($_GET['id']))
	{
		$db->exec ( "delete from dbuser where id='".$_GET['id']."' " );
		echo '<a href="index.php"> Quay Lai </a>';
	}
?>