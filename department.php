<div class="col-lg-12">
	<div class="card card-outline card-primary">
		<div class="card-header">
			<div class="card-tools">
				<a class="btn btn-block btn-sm btn-default btn-flat border-primary new_department" href="./index.php?page=manage_department"><i class="fa fa-plus"></i> Add New</a>
			</div>
		</div>
		<div class="card-body">
			<table class="table tabe-hover table-bordered" id="list">
				<colgroup>
					<col width="5%">
					<col width="30%">
					<col width="45%">
					<col width="20%">
				</colgroup>
				<thead>
					<tr>
						<th class="text-center">#</th>
						<th>Department</th>
						<th>Description</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
                      <?php 
                      $x=1;
                          require 'DB.php';
                          $SELECT_DEPARTMENT=$db->prepare("SELECT * FROM department");
                          $SELECT_DEPARTMENT->execute();
                          foreach ($SELECT_DEPARTMENT as $key  ) {
                          	// code...
                          

                      ?>
					<tr>
						<th class="text-center"><?php echo $x;?></th>
						<td><p><?php echo $key['Department'];?></p></td>
						<td><p><?php echo $key['Discription'];?></p></td>
						<td class="text-center">
							<div class="btn-group">
								<a href="http://localhost/Admin%20PageEmployee/Edit_Department.php?edit=<?php echo $key['id'];?>" data-id='' class="btn btn-primary btn-flat manage_department">
									<i class="fas fa-edit"></i>
								</a>
								<form method="POST"><button type="submit" name="remove" class="btn btn-danger btn-flat delete_department" value="<?php echo $key['id']?>" data-id="">
									<i class="fas fa-trash"></i>
								</button></form>
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
  	$Delete=$db->prepare("DELETE FROM department WHERE id=:id");
  	$Delete->bindparam("id",$_POST['remove']);
  	 if ($Delete->execute()) {
				   	echo "<script>alert('Done remove')</script>";
				   	   	echo "<script>window.open('http://localhost/Admin%20PageEmployee/index.php?page=department','_self')</script>";
				   }
				   else{
				   	 echo "Erorr";
				   }
  	  }

?>
<script>
	$(document).ready(function() {
		$('#list').dataTable()
		$('.new_department').click(function() {
			uni_modal("New Department", "manage_department.php")
		})
		$('.manage_department').click(function() {
			uni_modal("Manage Department", "manage_department.php?id=" + $(this).attr('data-id'))
		})
		$('.delete_department').click(function() {
			_conf("Are you sure to delete this Department?", "delete_department", [$(this).attr('data-id')])
		})
	})

	function delete_department($id) {
		start_load()
		$.ajax({
			url: 'ajax.php?action=delete_department',
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