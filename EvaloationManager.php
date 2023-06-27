<div class="col-lg-12">
	<div class="card card-outline card-success">
		<div class="card-header">
			
		</div>
		<div class="card-body" >
			<table class="table tabe-hover table-bordered" id="list">
				<thead>
					<tr>
						<th class="text-center">#</th>
						<th>Name</th>
					
						<th class="text-center">Action</th>
					</tr>
				</thead>
				<tbody >
                      	<?php 
                            require 'DB.php';
                            $x=1;
                          $evaluation=$db->prepare("SELECT * FROM manager");
                          $evaluation->execute();
                          foreach ($evaluation as $key ) {
                          	// code...
                           


                         ?>
					<tr>
						<th class="text-center"><?php echo $x;?></th>
						<td><b><?php echo $key['First_Name'].$key['Last_Name']?></b></td>
						
						
						<td class="text-center">
							<button type="button" class="btn btn-default btn-sm btn-flat border-info wave-effect text-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
								Action
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item view_evaluation" href="http://localhost/Admin%20PageEmployee/view_evaluationEmployee.php?view=<?php echo $key['manger_id']?>" data-id="">View</a>
							
								
							</div>
						</td>
					</tr>
                   <?php $x++;}?>
				</tbody>
			</table>
		</div>
	</div>
</div>

 

<script>
	$(document).ready(function() {
		$('#list').dataTable()
		$('.view_evaluation').click(function() {
			uni_modal("Evaluation Details", "view_evaluation.php?id=" + $(this).attr('data-id'), 'mid-large')
		})
		$('.delete_evaluation').click(function() {
			_conf("Are you sure to delete this evaluation?", "delete_evaluation", [$(this).attr('data-id')])
		})
	})

	function delete_evaluation($id) {
		start_load()
		$.ajax({
			url: 'ajax.php?action=delete_evaluation',
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