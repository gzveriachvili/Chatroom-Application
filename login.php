<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>iChat</title>
	<link href="style.css" rel="stylesheet">
</head>

<body>

	<div class="tab_one">
		<img src="img/icon.png" id="small_icon">
		<header class="header">
			<strong> iChat </strong>
		</header>
		<main class="content">

		</main>

<section class="form login">
  <form class="" action="#" enctype="multipart/form-data">
		<div id = "user_entry">
			<label for="username"></label><input type="text" name="username" value="" placeholder="Username" required autocomplete="nickname"><br>
			<label for="password"></label><input type="password" name="password" value="" placeholder="Password" required id="passID" autocomplete="new-password"><br>
      <input type="checkbox" onclick="passToggle()">Show Password<br>
      <div class="field button">
        <input type="submit" name="" value="Continue"><br>
      </div>
      Sign up <a href="index.php">here</a>.
	 	</div>
    </section>
	 	<warning id = "warning"></warning>
	</div>
  </form>
	<script src="js/jquery-1.11.0.js"></script>
  <script src="login.js"></script>
</body>
</html>
