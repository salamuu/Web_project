
<form action="reg.php" method="POST">
Received Date<br>
<input type="text" name="date" /><br><br>
Date Out<br>
<input type="text" name="dateo" /><br><br>
Received By<br>
<input type="text" name="rb" /><br><br>
Icoming File<br>
<select name="doc_type" class="ed">
	<?php
	include('connect.php');		
		$result = $db->prepare("SELECT * FROM doc_type ORDER BY id DESC");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
		echo '<option value="'.$row[name].'">'.$row[name].'</option>';
		}
	?>
</select><br /><br>
Letter Topic<br>
<textarea name="desc"></textarea><br><br>
Outgoing Office<br>
<select name="office" class="ed">
	<?php
	include('connect.php');		
		$result = $db->prepare("SELECT * FROM offices ORDER BY id DESC");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
		echo '<option value="'.$row[name].'">'.$row[name].'</option>';
		}
	?>
</select><br /><br>
Refference NO<br>
<input type="text" name="status" /><br><br>
Letter's Date<br>
<input type="text" name="ft" /><br><br>
<input type="submit" value="Save" />
</form>