	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript">

		// resize textarea according to chat

		$('textarea').each(function () {
		  this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;');
		}).on('input', function () {
		  this.style.height = 'auto';
		  this.style.height = (this.scrollHeight) + 'px';
		});



	 	$("#sendComm").on("click", sendComm); 

		function sendComm (event) {

			dataSend = $("#user_name, #last_displayed_chat_id, #user_comment").serialize();

			$.ajax({url: "server_side_chat.php", 
					type:"GET",
					data: dataSend,
				success : function( response , status , http ) {
					$.each( JSON.parse(response) , function( index , item ){
						$('#chat_box').val( $('#chat_box').val() + item.user_name + ':' + item.user_comment);
						$('#last_displayed_chat_id').val(item.chat_id);		
							});

					} /*end of success function */	
	    			}); /*end of ajax function */

				$("#user_comment").val(" ");
		} /*end of adding comment function */


			function updateChat(event) {

			$.ajax({url: "server_side_chat.php", 
					type:"POST",
					data:"last_displayed_chat_id=" + $('#last_displayed_chat_id').val(),
				success : function( response , status , http ) {
					$.each( JSON.parse(response) , function( index , item ){
						$('#chat_box').val( $('#chat_box').val() + item.user_name + ' : ' + item.user_comment + '\n' );
						$('#last_displayed_chat_id').val(item.chat_id);		
							});

					} /*end of success function */	
	    			}); /*end of ajax function */
	    		}; /* end of update Chat function */


	    		setInterval(updateChat, 4000);

	</script>