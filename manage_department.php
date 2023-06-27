<div class="container-fluid">
	<form action="" id="manage-department" method="POST">
		<input type="hidden" name="id" value="">
		<div id="msg" class="form-group"></div>
		<div class="form-group">
			<label for="department" class="control-label">Department</label>
			<input type="text" class="form-control form-control-sm" name="department" id="department" value="">
		</div>
		<div class="form-group">
			<label for="description" class="control-label">Description</label>
			<textarea name="description" id="description" cols="30" rows="4" class="form-control"></textarea>
		</div>
		<button type="submit" name="submit" name="submit" class="btn btn-primary mx-2 m-auto">save</button>
	</form>
	<?php
			if (isset($_POST['submit'])) {
				 require 'DB.php';
				 $INSERT_DEPARTMENT=$db->prepare("INSERT INTO  department(Department,Discription) VALUES (:Department,:Discription)");
				 $INSERT_DEPARTMENT->bindparam("Department",$_POST['department']);
				 $INSERT_DEPARTMENT->bindparam("Discription",$_POST['description']);
				 $INSERT_DEPARTMENT->execute();
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