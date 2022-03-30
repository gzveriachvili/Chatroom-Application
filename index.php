<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>iChat</title>
	<link href="css/style.css" rel="stylesheet">
</head>

<body>

	<div class="tab_one">
		<img src="img/icon.png" id="small_icon">
		<header class="header">
			<strong> iChat </strong>
		</header>
		<main class="content">
			<p>Welcome to iChat, a chatroom website where</p>
			<p>you can meet new people with same interests</p>
		</main>

<section class="form signup">
  <form class="" action="#" enctype="multipart/form-data">
    <div class="error-text"></div>
		<div id = "user_entry">
      <label for="">Upload profile picture</label>
      <input type="file" name="image" value="" placeholder="" required><br>
			<label for="username"></label><input type="text" name="username" value="" placeholder="Username" required autocomplete="nickname"><br>
			<label for="password"></label><input type="password" name="password" value="" placeholder="Password" required id="passID" autocomplete="new-password"><br>
      <input type="checkbox" onclick="passToggle()">Show Password<br>
      <div class="field button">
        <input type="submit" name="" value="Continue"><br>
      </div>
      Login <a href="login.php">here</a> if you already have an account.
	 	</div>
    </section>
	 	<warning id = "warning"></warning>
	</div>
  </form>
	<script src="js/jquery-1.11.0.js"></script>
	<script src="js/Tab1.js"></script>
  <script src="signup.js"></script>
</body>
</html>
