<?php

	if(isset($_POST['submit'])){

		$fname = $_POST['FName'];
	
		if($fname == ""){
			echo "empty";
		}else{
			echo $fname;
		}

		$lname = $_POST['LName'];
	
		if($lname == ""){
			echo "empty";
		}else{
			echo $lname;
		}
	
	$email = $_POST['Email'];
	

	if($email == ""){
		echo "empty";
	}else{
		echo $email;
	}

	
	$Username = $_POST['UserName'];
	

		if($Username == ""){
			echo "empty";
		}else{
			echo $Username;
		}


		$Passward = $_POST['Password'];
	

		if($Passward== ""){
			echo "empty";
		}else{
			echo $Passward;
		}


		$CPass = $_POST['ConPassword'];
	

		if($CPass== ""){
			echo "empty--";
		}else{
			echo $Passward;
		}


		if($Passward == $CPass)
		{
			echo "Password is secured";
		}
        else
        {
            echo "Password is not matched";
        }


		$radioVal = $_POST["gender"];

       if($radioVal == "Male")
       {
        echo"Gender: Male";
       }
       else if ($radioVal == "Female")
       {
       	echo("Gender: Female");
       }
       else if ($radioVal == "Others")
       {
      	echo("Gender: Other");
      }


}


?>

<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset>
			<legend> <b>REGISTRATION</b></legend>
				<table>
					<tr>
						<td> FirstName </td>
						<td> :<input type="text" name="FName"/> 
						<br/> </td>
					</tr>
					<tr>
						<td> LastName </td>
						<td> :<input type="text" name="LName"/> 
						<br/> </td>
					</tr>
					<tr>
						<td> Email </td>
						<td> :<input type="email" name="Email"/> 
						<button class="button" title="hint: name@example.com">i</button>
						<br/> </td>
					</tr>
					<tr>
						<td> User Name </td>
						<td> :<input type="username" name="UserName"/> 
						<br/> </td>
					</tr>
					<tr>
						<td> Password </td>
						<td> :<input type="password" name="Password"/> 
						<br/> </td>
					</tr>
					<tr>
						<td> Confirm Password </td>
						<td> :<input type="password" name="ConPassword"/> 
						<br/> </td>
					</tr>
			</table>
				<fieldset>
					<legend>Gender</legend>
					    <input type='radio' name='gender' value='Male'>Male
            			<input type='radio' name='gender' value='Female'>Female
            			<input type='radio' name='gender' value='Others'>Others
				</fieldset>
			<hr>
			<input type="reset" name="reset" value="reset">
			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>
</body>
</html>