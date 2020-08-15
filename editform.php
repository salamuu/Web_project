<?php
	include('connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM transaction WHERE id= :userid");
	$result->bindParam(':userid', $id);
	$result->execute();
	for($i=0; $rows = $result->fetch(); $i++){
?>
<form action="edit.php" method="POST">
<input type="hidden" name="memids" value="<?php echo $id; ?>" />
Date In<br>
<input type="text" name="date" value="<?php echo $rows['date']; ?>" /><br><br>
Date Out<br>
<input type="text" name="dateo" value="<?php echo $rows['dateout']; ?>" /><br><br>
Received By<br>
<input type="text" name="rb" value="<?php echo $rows['receive_by']; ?>" /><br><br>
Document Type<br>
<select name="doc_type" class="ed">
	<?php
	echo '<option value="'.$rows['doc_type'].'">'.$rows['doc_type'].'</option>';
	include('connect.php');		
		$result = $db->prepare("SELECT * FROM doc_type ORDER BY id DESC");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
		echo '<option value="'.$row[name].'">'.$row[name].'</option>';
		}
	?>
</select><br /><br>
Description<br>
<textarea name="desc"><?php echo $rows['description']; ?></textarea><br><br>
Office<br>
<select name="office" class="ed">
	<?php
	echo '<option value="'.$rows['office'].'">'.$rows['office'].'</option>';
	include('connect.php');		
		$result = $db->prepare("SELECT * FROM offices ORDER BY id DESC");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
		echo '<option value="'.$row[name].'">'.$row[name].'</option>';
		}
	?>
</select><br /><br>
Status<br>
<input type="text" name="status" value="<?php echo $rows['status']; ?>" required/><br><br>
Forwarded To<br>
<input type="text" name="ft" value="<?php echo $rows['ft']; ?>" required/><br><br>
<input type="submit" value="Save" />
</form>
<?php
	}
?>