<?php
	$con_dns = "mysql:host=localhost;dbname=database";
$con_user = 'root';
$con_pass = '';
$db = new PDO ( $con_dns, $con_user, $con_pass);

$result = $db->query( "select * from dbuser");
?>

<!DOCTYPE html>
<html>
<head> </head>
<body>
	<form>
		<table width="700" border="1" cellspacing="0">
			<tr>
				<td width="100"> ID </td>
				<td width="100"> user </td>
				<td width="200"> FullName </td>
				<td width="100"> Pass </td>
				<td width="100"> Hanh dong </td>
				
			</tr>
			<?php  
				foreach ( $result as $r) { ?>
			
			<tr>
				<td width="100"> <?php echo $r['id']; ?> </td>
				<td width="100"> <?php echo $r['db_user']; ?> </td>
				<td width="200"> <?php echo $r['db_name']; ?> </td>
				<td width="100"> <?php echo $r['db_pass']; ?> </td>
				<td width="200"> <a href="index.php?hanhdong=them"> Them </a>  |  
				<a href="index.php?hanhdong2=sua"> Sua </a>  |  
				<a href="xoa.php?id=<?php echo $r['id'] ?>"> Xoa</a> </td>
				
				
				<?php		
				}
			?>
			</tr>	
		</table> <br/>
	</form>
	
	<?php
	if(isset($_GET['hanhdong'])){
		if($_GET['hanhdong']=='them'){
			echo '<h4> day la trang Them</h4>';
			echo '<form>';
				echo ' ID: <input type="text" name="i_id" /> <br/>';
				echo ' User: <input type="text" name="i_user" /> <br/>';
				echo ' Name: <input type="text" name="i_name" /> <br/>';
				echo ' Pass: <input type="text" name="i_pass" /> <br/>';
				echo ' <input type="submit" name="subthem" value="Them" /> <br/>';
			echo '</form>';
		}
	}
	?>
	
	<?php
		if(isset($_GET['subthem'])){
			echo $_GET['i_id']; echo '<br/>';
			echo $_GET['i_user']; echo '<br/>';
			echo $_GET['i_name']; echo '<br/>';
			echo $_GET['i_pass']; echo '<br/>';
			$db->exec(" INSERT INTO dbuser VALUES ('".$_GET['i_id']."', '".$_GET['i_user']."', '".$_GET['i_name']."', '".$_GET['i_pass']."' ) ");
			echo '<a href="index.php"> Lam Moi </a>';
		}
	?>
	
	<?php
	if(isset($_GET['hanhdong2'])){
		if($_GET['hanhdong2']=='sua'){
			echo '<h4> day la trang Sua</h4>';
			echo '<form>';
				echo ' ID: <input type="text" name="ii_id" /> <br/>';
				echo ' User: <input type="text" name="ii_user" /> <br/>';
				echo ' Name: <input type="text" name="ii_name" /> <br/>';
				echo ' Pass: <input type="text" name="ii_pass" /> <br/>';
				echo ' <input type="submit" name="subsua" value="Sua" /> <br/>';
			echo '</form>';
		}
	}
	?>
	
	<?php
		if(isset($_GET['subsua'])){
			echo $_GET['ii_id']; echo '<br/>';
			echo $_GET['ii_user']; echo '<br/>';
			echo $_GET['ii_name']; echo '<br/>';
			echo $_GET['ii_pass']; echo '<br/>';
			$db->exec(" UPDATE dbuser SET db_user='".$_GET['ii_user']."', db_name='".$_GET['ii_name']."', db_pass='".$_GET['ii_pass']."' WHERE id='".$_GET['ii_id']."' ");
			echo '<a href="index.php"> Lam Moi </a>';
		}
	?>
</body>
</html>
	