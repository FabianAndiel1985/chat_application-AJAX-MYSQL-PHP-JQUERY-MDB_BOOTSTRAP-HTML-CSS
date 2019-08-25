	<?php
	include_once "dbconnect.php";
	?>

<?php

	$data = $_REQUEST;

	$last_displayed_chat_id = $data['last_displayed_chat_id'];


	// Enter new comment

	if ( isset($data['user_name'])  && isset($data['user_comment']) ) {

		$user_name = $data['user_name'];
		$user_comment = $data['user_comment'];

		$insertQuery ="INSERT INTO chats (chat_id, user_name, user_comment) VALUES (NULL,'$user_name','$user_comment')";

		$resultQuery =  mysqli_query($conn,$insertQuery);

	}

	// update the chat

	$query = "SELECT * FROM chats WHERE chat_id > '$last_displayed_chat_id'";

	$result = mysqli_query($conn,$query);

	$arr = array();

	$count = mysqli_num_rows($result);

	if ( $count>0 ) {

		while ($row = mysqli_fetch_array($result)) {
			array_push($arr, $row);
		}

	}


	mysqli_close($conn);
	echo json_encode($arr);

?>