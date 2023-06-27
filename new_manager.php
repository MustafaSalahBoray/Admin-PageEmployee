<?php require 'DB.php'; ?>
<div class="col-lg-12">
	<div class="card">
		<div class="card-body">
			<form action="" id="manage_employee" method="POST">
				<input type="hidden" name="id" value="">
				<div class="row">
					<div class="col-md-6 border-right">
						<div class="form-group">
							<label for="" class="control-label">First Name</label>
							<input type="text" name="firstname" class="form-control form-control-sm" required value="">
						</div>
						<div class="form-group">
							<label for="" class="control-label">Middle Name (optional)</label>
							<input type="text" name="middlename" class="form-control form-control-sm" value="">
						</div>
						<div class="form-group">
							<label for="" class="control-label">Last Name</label>
							<input type="text" name="lastname" class="form-control form-control-sm" required value="">
						</div>
						<div class="form-group">
							<label for="" class="control-label">Department</label>
							<select name="department_id"class="form-control form-control-sm select2" >
								<?php 
                               	    $selectDepart=$db->prepare("SELECT * FROM department");
                                   $selectDepart->execute();

                                  foreach ($selectDepart as $key ) {
                                   	echo '<option value="'.$key['Department'].'">'.$key['Department'].'</option>';
                                   }
                 
					
                               								?>
								

							</select>
						</div>
						<div class="form-group">
							<label for="" class="control-label">Designation</label>
							<select name="designation_id" id="designation_id" class="form-control form-control-sm select2">
									<?php 
                               	    $selectDepart=$db->prepare("SELECT * FROM degisnation");
                                   $selectDepart->execute();

                                  foreach ($selectDepart as $key ) {
                                   	echo '<option value="'.$key['Degisnation'].'">'.$key['Degisnation'].'</option>';
                                   }
                 
					
                               								?>


							</select>
						</div>
					

					</div>
					<div class="col-md-6">
							
						<div class="form-group">
							<label class="control-label">Email</label>
							<input type="email" class="form-control form-control-sm" name="email" required value="">
							<small id="#msg"></small>
						</div>
						<div class="form-group">
							<label class="control-label">Password</label>
							<input type="password" class="form-control form-control-sm" name="password">
							<small><i></i></small>
						</div>
						<div class="form-group">
							<label class="label control-label">Confirm Password</label>
							<input type="password" class="form-control form-control-sm" name="cpass">
							<small id="pass_match" data-status=''></small>
						</div>
					</div>
				</div>
				<hr>
				<div class="col-lg-12 text-right justify-content-center d-flex">
					<button class="btn btn-primary mr-2" type="submit" name="submit">Save</button>
					<button class="btn btn-secondary" type="button" onclick="location.href = 'index.php?page=employee_list'">Cancel</button>
				</div>
			</form>
		</div>
	</div>
</div>

<script>
	$('[name="password"],[name="cpass"]').keyup(function() {
		var pass = $('[name="password"]').val()
		var cpass = $('[name="cpass"]').val()
		if (cpass == '' || pass == '') {
			$('#pass_match').attr('data-status', '')
		} else {
			if (cpass == pass) {
				$('#pass_match').attr('data-status', '1').html('<i class="text-success">Password Matched.</i>')
			} else {
				$('#pass_match').attr('data-status', '2').html('<i class="text-danger">Password does not match.</i>')
			}
		}
	})


	// $('#manage_employee').submit(function(e) {
	// 	e.preventDefault()
	// 	$('input').removeClass("border-danger")
	// 	start_load()
	// 	$('#msg').html('')
	// 	if ($('[name="password"]').val() != '' && $('[name="cpass"]').val() != '') {
	// 		if ($('#pass_match').attr('data-status') != 1) {
	// 			if ($("[name='password']").val() != '') {
	// 				$('[name="password"],[name="cpass"]').addClass("border-danger")
	// 				end_load()
	// 				return false;
	// 			}
	// 		}
	// 	}
	// 	$.ajax({
	// 		url: 'ajax.php?action=save_employee',
	// 		data: new FormData($(this)[0]),
	// 		cache: false,
	// 		contentType: false,
	// 		processData: false,
	// 		method: 'POST',
	// 		type: 'POST',
	// 		success: function(resp) {
	// 			if (resp == 1) {
	// 				alert_toast('Data successfully saved.', "success");
	// 				setTimeout(function() {
	// 					location.replace('index.php?page=employee_list')
	// 				}, 750)
	// 			} else if (resp == 2) {
	// 				$('#msg').html("<div class='alert alert-danger'>Email already exist.</div>");
	// 				$('[name="email"]').addClass("border-danger")
	// 				end_load()
	// 			}
	// 		}
	// 	})
	// })
</script>
<?php 
  if (isset($_POST['submit'])) {

   $INSERT=$db->prepare("INSERT INTO  manager (First_Name,Last_Name	,Department,Designation,Email,Password) VALUES (:First_Name,:Last_Name,:Department,:Designation,:Email,:Password)");
   $INSERT->bindparam("First_Name",$_POST['firstname']);
     $INSERT->bindparam("Last_Name",$_POST['lastname']);
       $INSERT->bindparam("Department",$_POST['department_id']);
         $INSERT->bindparam("Designation",$_POST['designation_id']);
         
             $INSERT->bindparam("Email",$_POST['email']);
               $INSERT->bindparam("Password",$_POST['password']);
               if ($INSERT->execute()) { 
               	$selectMang=$db->prepare("SELECT * FROM manager");
               	$selectMang->execute();
               	$selectMang=$selectMang->fetchAll(PDO::FETCH_ASSOC);
              
               	$_SESSION['Manager']=$selectMang;
             
              	 	echo "<script>Done Insert Manager</script>";
               }
               else{
               	echo "string";
               }
  }



?>