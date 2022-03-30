<?php
	session_start();
	include('config.php');
  //redirect the user in case it tries to skip registering or logging in

	$id=$_REQUEST['id'];
	$chatq=mysqli_query($conn,"select * from chat_room where chat_room_id='$id'");
	$chatrow=mysqli_fetch_array($chatq);
	$roomName = $chatrow['chat_room_name'];

	if (!isset($_SESSION['unique_id']) ||(trim ($_SESSION['unique_id'] && $id) == '')) {
	header('location:login.php');
    exit();
	}

	$uquery=mysqli_query($conn,"SELECT * FROM `users` WHERE unique_id='".$_SESSION['unique_id']."'");
	$urow=mysqli_fetch_assoc($uquery);
	$chatN = $urow['username'];
	$sqlU=mysqli_query($conn, "UPDATE users SET room = '$roomName' WHERE unique_id='".$_SESSION['unique_id']."'");
	$sqlU=mysqli_query($conn, "UPDATE users SET id = '$id' WHERE unique_id='".$_SESSION['unique_id']."'");
	$sqlUser = mysqli_query($conn, "SELECT * FROM users");

	$query=mysqli_query($conn,"select * from `chat_room` where chat_room_id='$id'");
	$row=mysqli_fetch_array($query);
	if($row['chat_room_name'] === $urow['room']) {
		if($urow['joined'] === '1'){

			$sqlU=mysqli_query($conn, "UPDATE chat_room SET connected = connected+1 WHERE chat_room_id='$id'");
			}
			$sqlU=mysqli_query($conn, "UPDATE users SET joined =joined+1 WHERE unique_id='".$_SESSION['unique_id']."'");
	}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>
		Room:
		<?php
			echo $row['chat_room_name'];
		?>
	</title>
  <link href="style.css" rel="stylesheet">
</head>
<body>
  <div class="tab_four">
  <img src="img/icon.png" id="small_icon">
    <header class="header">
    <strong> iChat </strong>
  </header>
 </div>

 <div class="users">
  <h1>Members online:</h1>
	<section class="users">
    <div class="users-list">
    </div>
</div>

 <div class="texts">
  <h1><?php echo $row['chat_room_name']; ?></h1>
	<div id="result" style="overflow-y:scroll; height:300px; width: 100%;"></div>
	<form class="#">
		<!--<input type="text" id="msg">--><br/>
		<textarea id="msg" rows="1" cols="30" width= "100%" placeholder="Write a message..."></textarea><br/>
		<input type="hidden" value="<?php echo $row['chat_room_id']; ?>" id="id">
		<button type="button" id="send_msg" class="chat_button"><img src="img/send.png" /></button>
		<button id="emoji_button" type="button" class ="chat_button"><img src="img/emoji.png" /></button>
	</form>

</div>
	<?php
	$output = "";
	$output .= 'logout.php?logout_id='.$urow['unique_id'].'';
	 ?>

	 <button onclick="location.href='<?php echo $output; ?>'" id="small_button_last" class="log-out">Log out</button>

<span id="smile-emoji" hidden>&#128512;</span>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="chat.js"></script>
<script src="users.js"></script>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script>
if (window.location.href.substr(-2) !== '?r') {
    window.location = window.location.href + '?r';
}
</script>
<script>
$('#emoji_button').click(function() {
    var text = $('#smile-emoji').text();
    $('#msg').val($('#msg').val()+text);
});
</script>
</body>
</html>
