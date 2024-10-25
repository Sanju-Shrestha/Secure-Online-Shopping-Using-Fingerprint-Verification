<html>
<head>
<meta charset="UTF-8" />
</head>

<?php
if (isset($_POST['ON']))
{
$answer = shell_exec("file:\\\E:\\NITGEN\SDK\Bin\x64\NBioBSP_IndexSearchTest.exe");
echo $answer."</br>";
}
if (isset($_POST['OFF']))
{
	$answer = shell_exec("file:\\\E:\\NITGEN\SDK\Bin\x64\NBioBSP_IndexSearchTest.exe");
echo $answer."</br>";
echo 'try again';
}
?>
<form method="post">
<button name="ON">turn On</button>
<button name="OFF">turn Off</button><br>
</form>
</html>