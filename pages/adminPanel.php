<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Panel</title>

	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link
		href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap"
		rel="stylesheet"
	/>
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link
		href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;700&family=Open+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap"
		rel="stylesheet"
	/>
	<link rel="stylesheet" href="../css/normalize.css">
</head>
<style>
body{
	background-image: url('https://img.freepik.com/premium-photo/dark-grey-black-slate-texture-with-high-resolution-background-of-natural-black-stone-wall_38607-444.jpg');
}
*,
*::before,
*::after{
	box-sizing: border-box;
}
.account__form{
	background-color: white;
	min-height: 100px;
	max-width: 500px;
	width: 100%;
	height: 100%;
	border: 1px solid black;
	margin-top: 100px;
	padding: 15px;
}
.account__inner{
	display: flex;
	justify-content: center;
	align-items: flex-end;
}
.account-title{
	text-align: center;
	font-family: "Open Sans";
	font-size: 40px;
  letter-spacing: 0.05em;
  color: black;
  font-weight: 700;
	margin-bottom: 30px;
}
.account-reg{
	display: flex;
	flex-direction: column;
	align-items: center;
}
.account-reg input{
	border-radius: 2px;
	width: 400px;
	margin-bottom: 30px;
	height: 25px;
	padding: 15px;
	font-family: "Open Sans";
	font-size: 14px;
	background: black;
	color: white;
}
.account-reg input::placeholder{
	font-family: "Open Sans";
	font-size: 14px;
	
}
.account-reg button{
	background-color: black;
	color: white;
	width: 400px;
	padding: 15px;
	cursor: pointer;
	transition: all .5s;
}
.account-reg button:hover{
	background-color: white;
	color: black;
}
</style>
<body>
	<div class="account">
		<div class="container">
			<div class="account__inner">
				<div class="account__form">
					<h1 class="account-title">Sign in</h1>
					<form class="account-reg" action="../php/auth.php" method="post">
						<input type="text" class="reg-input" name="login" id="login" placeholder="Username">
						<input type="password" class="reg-input" name="pass" id="pass"placeholder="Password">
						<div class="reg-btn">
							<button type="submit" class="reg-sumbit">SUBMIT</button>
						</div>								
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>