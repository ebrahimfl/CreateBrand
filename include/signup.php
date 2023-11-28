
<link rel="stylesheet" href="assets/css/signup.css">
<main class="container sing-up">
		<form action="assets/php/userCore.php" method="post" class="form-sing-up">
			<h3 class="sing">Sing Up Here</h3>
            
			<div>
				<label for="name">Name</label>
				<input type="text" id="name" placeholder="Enter Your Name" name="name" required>
			</div>
			<div>
				<label for="email">Email</label>
				<input type="email" id="email" placeholder="Enter your mail" name="email" required>
			</div>
			<div>
				<label for="password">Password</label>
				<input type="password" id="password" placeholder="Enter your password" name="password" required>
			</div>
			<div>
				<label for="number">Number</label>
				<input type="number" id="number" placeholder="+880" name="numbar" required>
			</div>
			<div>
				<label for="country">Country</label>
				<input type="text" id="country" placeholder="Country" name="country" required>
			</div>
			<div class="sing-div">
				<input type="submit" value="Sing Up" name="signup" class="sing-up-button">
                <p><a href="?log=login"  >Allredy account</a></p>
			</div>
		</form>
	</main>