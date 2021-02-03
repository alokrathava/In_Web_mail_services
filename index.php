<?php
     require 'config.php';
 ?>
 <!doctype html>
 <html lang="en">
   <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

     <title>Email</title>
   </head>
   <body style="background: #e0f7fa;">
   	<?php 
   		include 'header.php';
   	?>
   	<div style="margin-top: 120px;background-color: #eeeeee; margin-left: 50px;margin-right: 50px;">
   		<div class="card border-primary mb-3" style="max-width: auto;">
  <div class="card-header">EMAIL</div>
  <form method="POST" action="sendmsg.php" name="mail">
  <div class="card-body text-primary">
    <div style="margin: 20px;">
    	<h5 class="card-title" style="padding: 8px;">SEND NEW MESSAGE</h5>
    	<div class="input-group mb-3">
    		<div class="input-group mb-3">
		  <span class="input-group-text" id="basic-addon1">FROM</span>
  			<input type="email" class="form-control" placeholder="example@example.com" value="<?php echo $_SESSION['email'] ?>" name="from_email" readonly>
		</div>
		  <span class="input-group-text" id="basic-addon1">TO</span>
  			<input type="email" class="form-control" placeholder="example@example.com" aria-label="Username" aria-describedby="basic-addon1" name="to_email" required="true">
		</div>
		<div class="input-group mb-3">
		  <span class="input-group-text" id="basic-addon1">Subject</span>
  			<input type="text" class="form-control" placeholder="Subject" aria-label="Username" aria-describedby="basic-addon1" name="subject" required="true">
		</div>
		<div class="form-floating">
		  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="msg"></textarea>
		  <label for="floatingTextarea2">Messaage Upto 30 Words Only</label>
		</div>
		<button type="submit" class="btn btn-success btn-lg" style="margin-top: 10px;">Send</button>
    </div>
  </div>
</form>
</div>
</div>
   	</div>
   </body>
 </html>