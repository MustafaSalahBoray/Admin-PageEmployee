   <link rel="stylesheet" type="text/css" href="Library/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="Style.css">
  <script type="text/javascript" src="Library/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="Library/js/jquery-3.6.1.min.js"></script>
      <link rel="stylesheet" href="A-Send Task/css/bootstrap.min.css">
      <?php include 'header.php';
       include 'topbar.php' ;
       include 'sidebar.php';
        require 'DB.php'; ?>
               <?php 
       if (isset($_GET['edit'])) {
       $select=$db->prepare("SELECT * FROM department WHERE id=:id");
       $select->bindparam("id",$_GET['edit']);
       $select->execute();
       foreach ($select as $key ) {
      echo  '<div class="container-fluid">
	<form action=""method="POST"  id="manage-department" style="width:700px; margin: auto;">
	
		<div id="msg" class="form-group"></div>
		<div class="form-group">
			<label for="department" class="control-label">Department</label>
			<input type="text" class="form-control form-control-sm " name="department" value="'.$key['Department'].'"">
		</div>
		<div class="form-group">
			<label for="description" class="control-label">Description</label>
			<textarea name="description" cols="30" rows="4" class="form-control ">'.$key['Discription'].'</textarea>
		</div>
		<button type="submit" name="Edit" value="'.$key['id'].'" class="btn btn-primary mx-2 m-auto">Edit</button>

	</form>';
       
     }}
       ?>



	<?php
			if (isset($_POST['Edit'])) {				 
				$Edit=$db->prepare("UPDATE department SET Department=:Department ,Discription=:Discription WHERE id=:id");
				 $Edit->bindparam("Department",$_POST['department']);
				 $Edit->bindparam("Discription",$_POST['description']);
				  $Edit->bindparam("id",$_POST['Edit']);
				   if ($Edit->execute()) {
				   	echo "<script>alert('Done')</script>";
				   	   	echo "<script>window.open('http://localhost/Admin%20PageEmployee/index.php?page=department','_self')</script>";
				   }
				   else{
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