<?php include_once "validation_login.php" ;?>
<html>
	<head></head>
	<body>
	<center>
	    <h1> Login </h1>
			<form action="" method="post">
				<table>
				    <tr>
					      <td>Username:</td>
					</tr>
					<tr>
						
						<td><input type="text" value="<?php echo $uname?>" name="uname"></td>
						<td><span style="color:white;"><?php echo $err_uname;?></span>
						</td>
					</tr>
					<tr>
					     <td>Password:</td>
					</tr>
					<tr>
						
						<td><input type="password" value="<?php echo $pass?>" name="pass"></td>
						<td><span style="color:white;"><?php echo $err_pass;?></span>
						</td>
					</tr>
					<tr>
						<td colspan="2" align="right">
							<input type="submit" name="login" value="Login">
						</td>
					</tr>
				</table>
			</form>
			</center>
	</body>
</html>