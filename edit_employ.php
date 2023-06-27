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
       $select=$db->prepare("SELECT * FROM employee WHERE employee_id=:id");
       $select->bindparam("id",$_GET['edit']);
       $select->execute();
       foreach ($select as $key ) {
     
       
    
       ?>
<div class="col-lg-12">
	<div class="card">
		<div class="card-body bg-light mt-5" style="width:1000px;margin: auto;">
			<form method="POST">
				<input type="hidden" name="id" value="">
				<div class="row">
					<div class="col-md-6 border-right">
						<div class="form-group">
							<label for="" class="control-label">First Name</label>
							<input type="text" name="firstname" class="form-control form-control-sm"  value="<?php echo $key['First_Name']?>">
						</div>
												<div class="form-group">
							<label for="" class="control-label">Last Name</label>
							<input type="text" name="lastname" class="form-control form-control-sm"  value="<?php echo $key['Last_Name']?>">
						</div>
						<div class="form-group">
							<label for="" class="control-label">Department</label>
							<input type="text" name="Department"  value="<?php echo $key['Department']?>" class="form-control" >
						</div>
						<div class="form-group">
							<label for="" class="control-label">Designation</label>
						   <input type="text" name="Designation"  value="<?php echo $key['Designation']?>" class="form-control" >
						</div>
					

					</div>
					<div class="col-md-6">
				
						
						<div class="form-group">
							<label class="control-label">Email</label>
							<input type="email" class="form-control form-control-sm" name="email"  value="<?php echo $key['Email']?>">
							<small id="#msg"></small>
						</div>
						<div class="form-group">
							<label class="control-label">Password</label>
							<input type="password" class="form-control form-control-sm" name="password" value="<?php echo $key['Password'];}}?>">
							<small><i></i></small>
						</div>
						<div class="form-group">
							<label class="label control-label">Confirm Password</label>
							<input type="password" class="form-control form-control-sm" name="cpass">
							<small id="pass_match" data-status=''></small>
						</div>
								<div class="form-group">
							<label for="" class="control-label">ManagerName</label>
							 <select name="ManagerNam" class="form-control form-control-sm select2" > -->
								<?php 
									  $SELECT=$db->prepare("SELECT * FROM manager");
									  $SELECT->execute();
									  foreach ($SELECT as $key ) {
								   echo '<option value="'.$key['manger_id'].'">'.$key['First_Name'].$key['Last_Name'].'</option>';
							  }
							  			//
								?>
					

							</select> 
						</div>
					</div>
				</div>
				<hr>
				<?php      if (isset($_GET['edit'])) {
       $select=$db->prepare("SELECT * FROM employee WHERE employee_id=:id");
       $select->bindparam("id",$_GET['edit']);
       $select->execute();
       foreach ($select as $key ) {?>
				<div class="col-lg-12 text-right justify-content-center d-flex">
					<button class="btn btn-primary mr-2" type="submit" name="submit" value="<?php echo  $key['employee_id']?>">Edit</button>
					<button class="btn btn-secondary" type="button" onclick="location.href = 'index.php?page=employee_list'">Cancel</button>
				</div>
				<?php }}?>
   </form>


	<?php
			if (isset($_POST['submit'])) {	
			   
				$Edit=$db->prepare("UPDATE employee SET First_Name=:First_Name ,Last_Name=:Last_Name ,Manager_Name=:Manager_Name, Department=:Department , Designation=:Designation ,Email=:Email ,Password=:Password  WHERE employee_id=:id");
				 $Edit->bindparam("First_Name",$_POST['firstname']);
				 $Edit->bindparam("Last_Name",$_POST['lastname']);
				 $Edit->bindparam("Manager_Name",$_POST['ManagerNam']);
				  $Edit->bindparam("Department",$_POST['Department']);
				  $Edit->bindparam("Designation",$_POST['Designation']);
				    $Edit->bindparam("Email",$_POST['email']);
				    $Edit->bindparam("Password",$_POST['password']);

				  $Edit->bindparam("id",$_POST['submit']);
				   if ($Edit->execute()) {
				   	
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
