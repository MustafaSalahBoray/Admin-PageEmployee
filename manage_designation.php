<div class="container-fluid">
	<form    method="POST">
	    
		<div id="msg" class="form-group"></div>
		<div class="form-group">
			<label for="department" class="control-label">Degisgnation</label>
			<input type="text" class="form-control form-control-sm" name="Degisnation"  >
		</div>
		<div class="form-group">
			<label for="description" class="control-label">Description</label>
			<textarea name="description" cols="30" rows="4" class="form-control"></textarea>
		</div>
		<button type="submit" name="submit" class="btn btn-primary mx-2 m-auto">save</button>
	</form>
	<?php
			
			if (isset($_POST['submit'])) {
				 require 'DB.php'; 
				
				   $INSERT_DEAGNOISE=$db->prepare("INSERT INTO  degisnation(Degisnation,Discription) VALUES (:Degisnation,:Discription)");
				   $INSERT_DEAGNOISE->bindparam("Degisnation",$_POST['Degisnation']);
				   $INSERT_DEAGNOISE->bindparam("Discription",$_POST['description']);
				 
			
				   if ($INSERT_DEAGNOISE->execute()) {
				   	 
				   }
				   else
				   {
				   	echo "Erorr";
				   }
				 			}
			
			?>
</div>
<!-- <script>
	$(document).ready(function() {
		$('#manage-department').submit(function(e) {
			e.preventDefault();
			start_load()
			$('#msg').html('')
			$.ajax({
				url: 'ajax.php?action=save_department',
				method: 'POST',
				data: $(this).serialize(),
				success: function(resp) {
					if (resp == 1) {
						alert_toast("Data successfully saved.", "success");
						setTimeout(function() {
							location.reload()
						}, 1750)
					} else if (resp == 2) {
						$('#msg').html('<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> Department already exist.</div>')
						end_load()
					}
				}
			})
		})
	})
</script> -->