<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>iChat</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link href="css/style.css" rel="stylesheet">
</head>

<body>

<div class="tab_three">
  <img src="img/icon.png" id="small_icon">
  <header class="header">
    <strong> iChat </strong>
  </header>
  <main class="content_3">
    <p>Create your own chatroom:</p>
  </main>
</div>

<div class="create_chat">
  <form action="create.php" method="post">
    <label for="chat_room_name"></label>
    <input type="text" id="name" name="chat_room_name" required placeholder="Name/ topic..." title = "Enter a name for your chat.">
    <br>
    <input type="submit" name="submit" id="submit_button" value="Create">
  </form>
</div>
<input type="submit" id="small_button_back" value="Back">
<script src="js/jquery-1.11.0.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="js/Tab3.js"></script>
</body>
</html>
