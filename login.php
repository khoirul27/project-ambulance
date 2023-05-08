<style>
	body {
		margin: 0;
		padding: 0;
		background: #1f2122;
		height: 100vh;
		font-family: sans-serif;
		background-size: cover;
		background-repeat: no-repeat;
		background-position: center;
		overflow: hidden
	}

	@media screen and (max-width: 600px; ) {
		body {
			background-size: cover;
			: fixed
		}
	}

	#particles-js {
		height: 100%
	}

	.loginBox {
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		width: 350px;
		min-height: 200px;
		background: #27292a;
		border-radius: 10px;
		padding: 40px;
		box-sizing: border-box
	}

	.user {
		margin: 0 auto;
		display: block;
		margin-bottom: 20px
	}

	h3 {
		margin: 0;
		padding: 0 0 20px;
		color: #e75e8d;
		text-align: center
	}

	.loginBox input {
		width: 100%;
		margin-bottom: 20px
	}

	.loginBox input[type="text"],

	.loginBox input[type="password"] {
		border: none;
		border-bottom: 2px solid #e75e8d;
		outline: none;
		height: 40px;
		color: #fff;
		background: transparent;
		font-size: 16px;
		padding-left: 20px;
		box-sizing: border-box
	}

	.loginBox input[type="text"]:hover,

	.loginBox input[type="password"]:hover {
		color: #fff;
		border: 1px solid #e75e8d;
		box-shadow: 0 0 5px rgba(0, 255, 0, .3), 0 0 10px rgba(0, 255, 0, .2), 0 0 15px rgba(0, 255, 0, .1), 0 2px 0 black
	}

	.loginBox input[type="text"]:focus,

	.loginBox input[type="password"]:focus {
		border-bottom: 2px solid #fff
	}

	.inputBox {
		position: relative
	}

	.inputBox span {
		position: absolute;
		top: 10px;
		color: #262626
	}

	.loginBox button[type="submit"] {
		border: none;
		outline: none;
		width: 100px;
		height: 40px;
		font-size: 16px;
		background: #e75e8d;
		color: #fff;
		border-radius: 20px;
		cursor: pointer
	}

	.loginBox a {
		color: #262626;
		font-size: 14px;
		font-weight: bold;
		text-decoration: none;
		text-align: center;
		display: block
	}

	a:hover {
		color: #00ffff
	}

	p {
		color: #0000ff
	}
</style>

<div class="loginBox rounded"> <img class="user" src="assets/images/login.png" height="150px" width="150px">
	<h3>Login Admin</h3>
	<form action="auth_model.php" method="POST">
		<div class="inputBox"> 
			<input type="text" name="username" placeholder="Username">
			<input type="password" name="password" placeholder="Password">
		</div>
		<button type="submit" name="login">login</button>
	</form>
</div>