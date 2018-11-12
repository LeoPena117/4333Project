<form action="" method="POST">
	Name? <input type="text" name="tName"></br>
Type ID on the ID column</br>
<?php
for($i=0;$i<$columns;$i++){
	?>
	Column <?=$i;?>: <input type="text" name="fields[]">
	Type? <select name="type[]">
  			<option value="INT">Int</option>
  			<option value="VARCHAR">VarChar</option>
  			<option value="TEXT">Text</option>
		</select>
	Length: <input type="text" name="length">
	<input type="checkbox" name="PK" value="<?=$i?>"> Primary Key? (auto incremented)<br>
<?php } ?>
<button class="btn btn-primary" name="TableSubmit">Submit</button>
</form>
