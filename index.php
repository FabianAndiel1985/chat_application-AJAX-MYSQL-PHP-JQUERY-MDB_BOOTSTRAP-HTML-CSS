<?php
	include_once "components/head.php";
?>

<?php
	include_once "dbconnect.php";
	?>
<body>

	<div class="container">

			<div id="chatroom_container">

			    <h5 class="card-header info-color white-text text-center py-4">
			        <strong>My Chat</strong>
			    </h5>

			   
			    <div class="card-body px-lg-5 pt-0">

			        
			        <form id="chat_form" class="text-center">

			            <div class="md-form mt-3">
			                <input name="user_name" type="text" id="user_name" class="form-control">
			                <label for="user_name">user_name</label>
			            </div>

			            <!-- latest id  -->
			            <div class="d-none md-form">
			                <input name="last_displayed_chat_id" type="text" id="last_displayed_chat_id" class="form-control">
			                <label for="last_displayed_chat_id">latest chat id</label>
			            </div>

			            
			            <div class="md-form">
			                <textarea id="chat_box" class="form-control md-textarea" rows="7" readonly></textarea>
			            </div>

			            
			            <div class="md-form mt-3">
			                <input name="user_comment" type="text" id="user_comment" class="form-control">
			                <label for="user_comment">enter your comment</label>
			            </div>

			        
			            <!-- Send button -->
			            <button id="sendComm" class="btn btn-outline-info btn-rounded btn-lg z-depth-0 my-4 waves-effect">Send comment</button>

			        </form> <!-- end of form -->
			        
			    </div> <!-- end of card body -->
			
			</div> <!-- end of chatroom container -->
			
	</div> <!-- end of bootstrap container -->

	<?php
	require_once "functionalities/add_update_functionality.php";
	?>

	<?php
	include_once "components/scripts.php";
	?>

</body>
</html>