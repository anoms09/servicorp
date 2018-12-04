<?php
	if (isset($_POST['submit_signup'])){
		$name=$_POST['full_name'];	$statecode=$_POST['stateCode'];	$callUpNumber=$_POST['callUpNumber'];	$email=$_POST['email'];
		$password=$_POST['password'];	$password = md5($password);	$state=$_POST['state']; $year=$_POST['yearOfEntry']; $ppa=$_POST['ppa'];$lga=$_POST['lga']; $batch=$_POST['batch'];
		
		include("./php/connection.php");
		
		$db_selected=mysqli_select_db($con, myDBis);
		if (!$db_selected){
			die('Error: Can Not Connect To '.myDBis.':'.mysqli_error($con));
		}else{
			$query="INSERT INTO corp_member (state_code, name, callup_no, email, state, lga, ppa, batch, year_of_entry, password)
			        VALUES ('$statecode', '$name', '$callUpNumber', '$email', '$state', '$lga', '$ppa', '$batch', '$year', '$password')";
					
			$runquery=mysqli_query($con, $query);
			
			if (!$runquery){
				die(mysqli_error($con));
				//echo "<script>";
				//echo " alert('Unable to Register at this Moment. Pls Try Again.');      
				//window.location.href='".('login.php')."'; </script>";
			}else{
				echo "<script>";
				echo " alert('Registration Successful.');      
				window.location.href='".('index.php')."'; </script>";
			}
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ServiCorp || Sign up/ Log in</title>
	<link href="./css/style.css" rel="stylesheet" type="text/css" media="screen"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<?php include("./php/nav.php"); ?>
	<div id = "content">
		<div id="loginForm">
			<form name="signUpForm" method="post" action="" class="form-group" onsubmit="return signUpValidation();">
				<div class="form-row">
					<div class="col-md-4 mb-3">
						<label for="full_name">Full name</label>
						<input type="text" class="form-control" name="full_name" id="full_name" placeholder="Full name" required>
					</div>
					<div class="col-md-4 mb-3">
						<label for="state_code">State code</label>
						<input type="text" class="form-control" name="stateCode" id="state_code" placeholder="XX/XXX/XXXX" required>
					</div>
					<div class="col-md-4 mb-3">
						<label for="callup_number">Callup Number</label>
						<div class="input-group">
							<input type="text" class="form-control " id="callup_number" name="callUpNumber" placeholder="NYSC/XXX/XXXX/XXXXXX" required>
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-4 mb-3">
						<label for="email">Email</label>
						<input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
					</div>
					<div class="col-md-4 mb-3">
						<label for="state">State</label>
						<select id="state" class="form-control" required name="state">
							<option selected>Choose...</option>
							<option>Ogun</option>
						</select>
					</div>
					<div class="col-md-4 mb-3">
						<label for="lga">Local Government</label>
						<input type="text" class="form-control" id="lga" placeholder="lga" name="lga" required>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-4 mb-3">
						<label for="ppa">PPA</label>
						<textarea name="ppa" class="form-control" aria-label="With textarea"></textarea>							
					</div>
		
					<div class="col-md-4 mb-3">
						<label for="year_of_entry">Year of Entry</label>
						<select id="year_of_entry" class="form-control" name="yearOfEntry">
							<option selected>Choose...</option>
							<option>2018</option>
						</select>
					</div>
					<div class="col-md-4 mb-3">
						<label for="batch">Batch and Stream</label>
						<input type="text" class="form-control" id="batch" placeholder="Batch" name="batch" required>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-6 mb-3">
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
					</div>
					<div class="col-md-6 mb-3">
						<label for="confirm_password">Confirm Password</label>
						<input type="password" class="form-control" id="confirm_password" placeholder="Confirm password" name="confirmPassword" required>
					</div>
				</div>
				<button class="btn btn-primary" type="submit" name="submit_signup">Create Account</button>
			</form>
		</div>
	</div>
	<?php include("./php/footer.php"); ?>

<script type="text/javascript">
	function signUpValidation(){
		var state_Check= document.forms["signUpForm"]["state"].value;
		var year_Check= document.forms["signUpForm"]["year_of_entry"].value;
		var password_Check= document.forms["signUpForm"]["password"].value;
		var cpass_Check= document.forms["signUpForm"]["confirmPassword"].value;

		if (state_Check === "Choose..."){
			alert("Select Valid State")
			return false;
		}
		if (year_Check === "Choose..."){
			alert("Select Valid Year")
			return false;
		}
		if (password_Check !== cpass_Check){
			alert("Password do not match!")
			return false;
		}
	}
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>