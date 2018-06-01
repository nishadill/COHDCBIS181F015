<!DOCTYPE html>
<html>
<head>
	<title>Member Registration</title>
</head>
<body>
	<form method="post" action="#">
		<table>
			<tr>
				<td>Username : </td>
				<td><input type="text" name="txtUN" required /></td>
			</tr>
			<tr>
				<td>Password : </td>
				<td><input type="password" name="txtPW" required/></td>
			</tr>
			<tr>
				<td colspan="2" align="right"><input type="submit" name="btnRegister" value="Register"/></td>
			</tr>
		</table>
	</form>
<?php
if(isset($_POST['btnRegister']))
	{	
		$username = $_POST['txtUN'];
		$password = $_POST['txtPW'];
		$con = mysqli_connect("localhost","root","","log");
		$stmt = $con->prepare("INSERT INTO users VALUES(?,?)");
		$stmt->bind_param("log", $username,$password);
		$stmt->execute();
		$stmt->close();
		$con->close();
		header('Location:assign.php');
	}
?>
</body>
</html>