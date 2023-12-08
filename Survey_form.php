
<?php 
include "connect.php";
if(isset($_POST["submit"])){

    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $phone = $_POST["phone"];
    $province = $_POST["province"];
    $salary = $_POST["salary"];


    $sql = "insert into `survey_form` (name, email,age, phone,province, salary)
    values('$name', '$email', '$age', '$phone','$province', '$salary')";

    $result = mysqli_query($conn, $sql);

    if($result){
        echo "Inserted Succesfully";
    }else{
        echo "Insert Denied";
    };

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge">
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0">
	<title>
    Survey Form	
</title>

	<style>

		/* Styling the Body element i.e. Color, 
		Font, Alignment */ 
		body {
			background-color: #05c46b;
			font-family: Verdana;
			text-align: center;
		}

		/* Styling the Form (Color, Padding, Shadow) */
		form {
			background-color: #fff;
			max-width: 500px;
			margin: 50px auto;
			padding: 30px 20px;
			box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
		}

		/* Styling form-control Class */
		.form-control {
			text-align: left;
			margin-bottom: 25px;
		}

		/* Styling form-control Label */ 
		.form-control label {
			display: block;
			margin-bottom: 10px;
		}

		/* Styling form-control input, 
		select, textarea */
		.form-control input,
		.form-control select,
		.form-control textarea {
			border: 1px solid #777;
			border-radius: 2px;
			font-family: inherit;
			padding: 10px;
			display: block;
			width: 95%;
		}

		/* Styling form-control Radio 
		button and Checkbox */
		.form-control input[type="radio"],
		.form-control input[type="checkbox"] {
			display: inline-block;
			width: auto;
		}

		/* Styling Button */
		button {
			background-color: #05c46b;
			border: 1px solid #777;
			border-radius: 2px;
			font-family: inherit;
			font-size: 21px;
			display: block;
			width: 100%;
			margin-top: 50px;
			margin-bottom: 20px;
		}
	</style>
</head>

<body>
	<h1>Online Survey Form</h1>

	<!-- Create Form -->
	<form id="form" method="post">

		<!-- Details -->
		<div class="form-control">
			<label for="name" id="label-name">
				Name
			</label>

			<!-- Input Type Text -->
			<input type="text"
				id="name"
				placeholder="Enter your name" name="name">
		</div>

		<div class="form-control">
			<label for="email" id="label-email">
				Email
			</label>

			<!-- Input Type Email-->
			<input type="email"
				id="email"
				placeholder="Enter your email" name="email">
		</div>

		<div class="form-control">
			<label for="age" id="label-age">
				Age
			</label>

			<!-- Input Type Text -->
			<input type="text"
				id="age"
				placeholder="Enter your age" name="age">
		</div>


        <div class="form-control">
			<label for="phone" id="label-phone">
				Phone
			</label>

			<!-- Input Type Text -->
			<input type="text"
				id="age"
				placeholder="Enter Phone Number" name="phone">
		</div>

        <div class="form-control">
			<label for="province" id="label-province">
				Province
			</label>

			<!-- Input Type Text -->
			<input type="text"
				id="province"
				placeholder="Province" name="province">
		</div>

        <div class="form-control">
			<label for="Salary" id="label-salary">
				Salary
			</label>

			<!-- Input Type Text -->
			<input type="text"
				id="salary"
				placeholder="salary" name="salary">
		</div>
		<!-- Multi-line Text Input Control -->
		<button type="submit" value="submit" name="submit">
			Submit
		</button>
	</form>
</body>
</html>
