<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form action="./checker.php" method="GET" >
<input type="text" name="input0">
<?php session_start();

echo '<br/><b>'.$_SESSION['code_pre_input0'].'</b>.';
echo '<br/><b>'.$_SESSION['code_pre_input1'].'</b>.';
echo '<br/><b>'.$_SESSION['code_pre_input2'].'</b>.';

 ?>
 <button type='submit' >testar</button>
</form>
</body>
</html>
