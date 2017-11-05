<?php
	$conn = new mysqli("localhost","root","","blog_samples");
	$count=0;
	if(!empty($_POST['add'])) {
		$subject = mysqli_real_escape_string($conn,$_POST["subject"]);
		$comment = mysqli_real_escape_string($conn,$_POST["comment"]);
		$sql = "INSERT INTO comments (subject,comment) VALUES('" . $subject . "','" . $comment . "')";
		mysqli_query($conn, $sql);
	}
	$sql2="SELECT * FROM comments WHERE status = 0";
	$result=mysqli_query($conn, $sql2);
	$count=mysqli_num_rows($result);
?>
<form name="frmNotification" id="frmNotification" action="" method="post" >
	<div id="form-header" class="form-row">Add New Message</div>
	<div class="form-row">
		<div class="form-label">Subject:</div><div class="error" id="subject"></div>
		<div class="form-element">
			<input type="text"  name="subject" id="subject" required>
			
		</div>
	</div>
	<div class="form-row">
		<div class="form-label">Comment:</div><div class="error" id="comment"></div>
		<div class="form-element">
			<textarea rows="4" cols="30" name="comment" id="comment"></textarea>
		</div>
	</div>
	<div class="form-row">
		<div class="form-element">
			<input type="submit" name="add" id="btn-send" value="Submit">
		</div>
	</div>
</form>
