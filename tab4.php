<?php
	session_set_cookie_params(0);
	session_start();
	include('config.php');
  //redirect the user in case it tries to skip registering or logging in
	if (!isset($_SESSION['unique_id']) ||(trim ($_SESSION['unique_id']) == '')) {
	header('location:login.php');
    exit();
	}

	$uquery=mysqli_query($conn,"SELECT * FROM `users` WHERE unique_id='".$_SESSION['unique_id']."'");
	$urow=mysqli_fetch_assoc($uquery);


?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>iChat</title>
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <div class="tab_four">
  <img src="img/icon.png" id="small_icon">
    <header class="header">
    <strong> iChat </strong>
  </header>
  <main class="content_3">
    <p>Join an existing chatroom from the list:</p>
  </main>
</div>
<?php
$sql2 = mysqli_query($conn, "SELECT * FROM chat_room");
$output = "";
while($row2 = mysqli_fetch_array($sql2)) {
  $output .= '
    <tr>
      <td><a href="chat.php?id='.$row2['chat_room_id'].'">'.$row2['chat_room_name'].'</a></td>
      <td>'.$row2['connected'].'</td>
      <td>'.$row2['chat_room_date'].'</td>
    </tr>
  ';
  }
 ?>

 <table>
   <tr>
     <th>Topics</th>
     <th>Members</th>
     <th>Date</th>
   </tr>
	 	<?php
		 echo $output;
		?>
 </table>
	 <input type="submit" id="small_button_back" value="Back">

</div>
<script src="js/jquery-1.11.0.js"></script>
<script src="js/Tab4.js"></script>
</body>
</html>
