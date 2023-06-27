
<div class="col-lg-12">
	<div class="card card-outline card-success">
		<div class="card-header">
			<div class="card-tools">
				<a class="btn btn-block btn-sm btn-default btn-flat border-primary" href="./index.php?page=new_manager"><i class="fa fa-plus"></i> Add New Manager</a>
			</div>
		</div>
		<div class="card-body">
			<table class="table tabe-hover table-bordered" id="list">
				<thead>
					<tr>
						<th class="text-center">#</th>
						<th>Name</th>
						<th>Email</th>
						<th>Department</th>
						<th>Designation</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
                         <?php 
                            require 'DB.php';
                            $x=1;
                          $selectManager=$db->prepare("SELECT * FROM manager");
                          $selectManager->execute();
                          foreach ($selectManager as $key ) {
                          	// code...
                          


                         ?>
					<tr>
						<th class="text-center"><?php echo $x;?></th>
						<td><b><?php echo $key['First_Name'].' '.$key['Last_Name'];?></b></td>
						<td><b><?php echo $key['Email']?></b></td>
						<td><b><?php echo $key['Department']?></b></td>
						<td><b><?php echo $key['Designation']?></b></td>
						<td class="text-center">
							<button type="button" class="btn btn-default btn-sm btn-flat border-info wave-effect text-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
								Action
							</button>
							<div class="dropdown-menu">
								
								<a class="dropdown-item" href="http://localhost/Admin%20PageEmployee/edit_manager.php?edit=<?php echo $key['manger_id'];?>">Edit</a>
								<div class="dropdown-divider"></div>
								<form method="POST"><button class="dropdown-item delete_employee" type="submit" name="remove" value=" <?php echo $key['manger_id'];?>">Delete</button></form>
							</div>
						</td>
					</tr>
				<?php $x++;}?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php 
  if (isset($_POST['remove'])) {
  	$Delete=$db->prepare("DELETE FROM manager WHERE manger_id=:id");
  	$Delete->bindparam("id",$_POST['remove']);
  	 if ($Delete->execute()) {
				   	echo "<script>alert('Done remove')</script>";
				   	   	echo "<script>window.open('http://localhost/Admin%20PageEmployee/index.php?page=manager_list','_self')</script>";
				   }
				   else{
				   	 echo "Erorr";
				   }
  	  }

?>
<script>
	$(document).ready(function() {
		$('#list').dataTable()
		$('.view_employee').click(function() {
			uni_modal("<i class='fa fa-id-card'></i> Employee Details", "view_employee.php?id=" + $(this).attr('data-id'))
		})
		$('.delete_employee').click(function() {
			_conf("Are you sure to delete this Employee?", "delete_employee", [$(this).attr('data-id')])
		})
	})

	function delete_employee($id) {
		start_load()
		$.ajax({
			url: 'ajax.php?action=delete_employee',
			method: 'POST',
			data: {
				id: $id
			},
			success: function(resp) {
				if (resp == 1) {
					alert_toast("Data successfully deleted", 'success')
					setTimeout(function() {
						location.reload()
					}, 1500)

				}
			}
		})
	}
</script>