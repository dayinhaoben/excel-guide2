<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Administrator</title>
		
		<script type="text/javascript">
			function InputCheck(LoginForm) {
				if(LoginForm.username.value=="") {
					alert("Please put in Username!");
					LoginForm.username.focus();
					return(false);
				}
				if(LoginForm.password.value=="") {
					alert("Please put in password!");
					LoginForm.password.focus();
					return(false);
				}
				
			}
		</script>
	</head>
	
	<body>
		<form action="admin/adminWork.php" method="post" name="LoginForm" onSubmit="return InputCheck(this)" >
		<h3>Administrator log in</h3>
			Username:<input type="text" name="username" id="username" /><br/>
			Password:<input type="text" name="password" id="password" /><br>
			<input type="submit" name="submit" value="Log in" />
		</form>
	</body>
</html>