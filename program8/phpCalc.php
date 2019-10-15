<?php
	if(isset($_POST['res'])){
		$res = $_POST['display'];
		$res = eval('return '.$res.';');
	}
?>

<html>
<body>
	<center>
	<form name="Calculator" method="post">
	<table>
		<tr>
		<td colspan = "4"><input type="text" name="display" value="<?php if(isset($res)) {echo $res;} ?>" ></td>
		</tr>
		<tr>
		<td> <input type="button" value = "1" OnClick="Calculator.display.value += '1'"> </td>
		<td> <input type="button" value = "2" OnClick="Calculator.display.value += '2'"> </td>
		<td> <input type="button" value = "3" OnClick="Calculator.display.value += '3'"> </td>
		<td> <input type="button" value = "+" OnClick="Calculator.display.value += '+'"> </td>
		</tr>
		<tr>
		<td> <input type="button" value = "4" OnClick="Calculator.display.value += '4'"> </td>
		<td> <input type="button" value = "5" OnClick="Calculator.display.value += '5'"> </td>
		<td> <input type="button" value = "6" OnClick="Calculator.display.value += '6'"> </td>
		<td> <input type="button" value = "-" OnClick="Calculator.display.value += '-'"> </td>
		</tr>
		<tr>
		<td> <input type="button" value = "7" OnClick="Calculator.display.value += '7'"> </td>
		<td> <input type="button" value = "8" OnClick="Calculator.display.value += '8'"> </td>
		<td> <input type="button" value = "9" OnClick="Calculator.display.value += '9'"> </td>
		<td> <input type="button" value = "*" OnClick="Calculator.display.value += '*'"> </td>
		</tr>
		<tr>
		<td> <input type="button" value = "0" OnClick="Calculator.display.value += '0'"> </td>
		<td> <input type="button" value = "C" OnClick="Calculator.display.value = '' "> </td>
		<td> <input type="submit" value = "=" name="res"> </td>
		<td> <input type="button" value = "/" OnClick="Calculator.display.value += '/'"> </td>
		</tr>
			
	</table>
	</center>
</body>
</html>
