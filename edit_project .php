<div class="col-lg-12">
	<div class="card card-outline card-primary">
		<div class="card-body">
			<form action="" method="POST">

				<input type="hidden" name="id" value="">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="" class="control-label">Name</label>
							<input type="text" class="form-control form-control-sm" name="name" value="">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="">Status</label>
							<select name="status" id="status" class="custom-select custom-select-sm">
								<option value="0">Pending</option>
								<option value="3">On-Hold</option>
								<option value="5">Done</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="" class="control-label">Start Date</label>
							<input type="date" class="form-control form-control-sm" autocomplete="off" name="start_date" value="">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="" class="control-label">End Date</label>
							<input type="date" class="form-control form-control-sm" autocomplete="off" name="end_date" value="">
						</div>
					</div>
				</div>
				<div class="row">

					<div class="col-md-6">
						<div class="form-group">
							<label for="" class="control-label">Project Manager</label>
							<select class="form-control form-control-sm select2" name="manager_id">
								<option></option>

								<option value=""></option>

							</select>
						</div>
					</div>

					<input type="hidden" name="manager_id" value="">


				</div>
				<div class="row">
					<div class="col-md-10">
						<div class="form-group">
							<label for="" class="control-label">Description</label>
							<textarea name="description" id="" cols="30" rows="10" class="summernote form-control">

					</textarea>
						</div>
					</div>
				</div>
			</form>
		</div>
		<div class="card-footer border-top border-info">
			<div class="d-flex w-100 justify-content-center align-items-center">
				<button class="btn btn-flat  bg-gradient-primary mx-2" type="submit" name="submit">Save</button>
				<!-- <button type="submit" name="submit">insert</button> -->
				<button class="btn btn-flat bg-gradient-secondary mx-2" type="button" onclick="location.href='index.php?page=project_list'">Cancel</button>
			</div>
			<?php
			// if (isset($_POST['submit'])) {
			// 	echo "welcome";
			// }
			?>
		</div>
	</div>
</div>
<script>
	// $('#manage-project').submit(function(e) {
	// 	e.preventDefault()
	// 	start_load()
	// 	$.ajax({
	// 		url: 'ajax.php?action=save_project',
	// 		data: new FormData($(this)[0]),
	// 		cache: false,
	// 		contentType: false,
	// 		processData: false,
	// 		method: 'POST',
	// 		type: 'POST',
	// 		success: function(resp) {
	// 			if (resp == 1) {
	// 				alert_toast('Data successfully saved', "success");
	// 				setTimeout(function() {
	// 					location.href = 'index.php?page=project_list'
	// 				}, 2000)
	// 			}
	// 		}
	// 	})
	// })
</script>