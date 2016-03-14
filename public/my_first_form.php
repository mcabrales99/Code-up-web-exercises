
<?php
	var_dump($_GET);
	var_dump($_POST);
	?>

<!DOCTYPE html>
<html>

<head> 
	<meta charset="utf-8">
	<title>My fist HTML form</title>
</head>

<body>

	<h2>User Login<h2>

	<form method="POST" action="/my_first_form.php">
	    <p>
	        <label for="username">Username</label>
	        <input id="username" name="username" type="text" placeholder="username">
	    </p>
	    <p>
	        <label for="password">Password</label>
	        <input id="password" name="password" type="password" placeholder="password">
	    </p>
	    <p>
	        <input type="submit">
	        <button type="submit">Log In</button>
	    </p>
	</form>

	<hr>


	<h2>Compose an E mail</h2>


	<form method="POST" action="/my_first_form.php">

	    <p>
	        <label for="toemail">Send to</label>
	        <input id="toemail" name="toemail" type="email" placeholder="username">
	    </p>
	    <p>
	        <label for="fromemail">your email</label>
	        <input id="fromemail" name="fromemail" type="email" placeholder="password">
	    </p>
	    <p>
	        <label for="Subject">Subject</label>
	        <input id="Subject" name="Subject" type="text" placeholder="Subject">
	    </p>
	    
	    <textarea id="email_body" name="email_body" rows="5" cols="40">This is the space to type into</textarea>

	    <p>
	    	<h2>Do you want a copy sent to your email?</h2>
	    	<input type="checkbox" id="email" name="email" value="yes" checked input>
	    	<label for="email">Sign up for E-mail?</label>
	    </p>

		<h2>Multiple Choice Test</h2>

		<h3>What is the capitol of Texas?</h3>


		<label>
			
			<input type="radio" name="q1" value="houston">
				Houston
		</label>

		<label>
			<input type="radio" name="q1" value="Dallas">
				Dallas
		</label>

		<label>
			<input type="radio" name="q1" value="Austin">
				Austin
		</label>

		<label>
			<input type="radio" name="q1" value="San Antonio">
				San Antonio
		</label>

	<p>
		<h3>What is the Best Car Ever?</h3>


<label><input type="checkbox" id="car1" name="car[]" value="Ford"> Ford</label>
<label><input type="checkbox" id="car2" name="car[]" value="Chevy"> Chevy</label>
<label><input type="checkbox" id="car3" name="car[]" value="Jeep"> Jeep</label>

	</p>

	<p>	
		<h3>How many siblings do you have?</h3>

		
		<select id="siblings" name="siblings[]" multiple>
			<option value="1">one</option>
			<option value="2">two</option>
			<option value="3">three</option>

		</select>
	

		<p>
	        <input type="submit">
	        <button type="submit">Log In</button>
		</p>

</form>

<hr>
	<h2>Select Testing</h2>

<form>

	<label for="hot_dog">Do you like hot dogs?</label>
	<select id="hot_dog" name="hot_dog">

			<option value="1">Yes</option>
			<option value="0">NO</option>
	</select>
	

	<input type="submit">


</form>

</body>


</html>