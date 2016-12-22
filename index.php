<!DOCTYPE html>
<html>
<head>
<title>Calculator exagerat de simplu</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<body>
<div class="jumbotron">
<div class="container" style='text-align:center;'>
<table>
<form action='index.php' method=POST>
<tr><td><input type=text name=element1 class="form-control" placeholder='ex: 2'></td>
<td><select name=operator class=form-control>
<option value='plus'>+</option>
<option value='minus'>-</option>
<option value='ori'>*</option>
<option value='impartit'>/</option>
</select></td>
<td><input type=text name=element2 class="form-control" placeholder='ex: 2'></td>
<tr><td colspan=3><input type=submit class='form-control' value='Calculeaza'></td></tr>
</form>
<?php
$operator['plus']="+";
$operator['minus']="-";
$operator['ori']="*";
$operator['impartit']="/";

if(isset($_POST['operator'])) {
	if($_POST['operator']=='plus') {
		$rezultat=$_POST['element1']+$_POST['element2'];
	} elseif($_POST['operator']=='minus') {
		$rezultat=$_POST['element1']-$_POST['element2'];
	} elseif($_POST['operator']=='ori') {
		$rezultat=$_POST['element1']*$_POST['element2'];
	} elseif($_POST['operator']=='ori') {
		$rezultat=$_POST['element1']/$_POST['element2'];
	}
	echo "<tr><td colspan=3><input type=button readonly value=".$_POST['element1'];
	echo $operator[$_POST['operator']];
	echo $_POST['element2'];
	echo "=";
	echo "{$rezultat}></td></tr>";
}
?>
</table>
</div>
</div>
</body>
</html>