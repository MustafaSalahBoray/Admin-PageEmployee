

  <link rel="stylesheet" type="text/css" href="Library/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="Style.css">
  <script type="text/javascript" src="Library/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="Library/js/jquery-3.6.1.min.js"></script>
      <link rel="stylesheet" href="A-Send Task/css/bootstrap.min.css">
      <?php include 'header.php';
       include 'topbar.php' ;
       include 'sidebar.php';
        require 'DB.php';
        require 'footer.php';?>
        <div class="col-lg-12">
	<div class="card card-outline card-success mt-5"style="width:50%;margin:auto; ">
		<div class="card-header">
  <?php 
  if (isset($_GET['view'])) {
  	$select=$db->prepare("SELECT * FROM manager WHERE manger_id=:id");
  	  $select->bindparam("id",$_GET['view']);
        $select->execute();
        foreach ($select as $key ) {
          echo "<h2 class='text-center'> Manager:". $key['First_Name']." ".$key['Last_Name']."</h2>";
          $id=$key['manger_id'];
        }
  }
  ?>
    

		</div>
		<div class="card-body " >
			<table class="table table-hover " >
				<colgroup>
			
     
						<col width="10%">
					
					<col width="100%">
				</colgroup>
				<thead>
					<tr>
						<th class="text-center">#</th>
						<th class="text-center">Employee</th>
					
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
							<?php 
                          if (isset($_GET['view'])) {
                            $x=1;
                          require 'DB.php';
                             
                          $employee=$db->prepare("SELECT * FROM employee WHERE Manager_Name =:id");
                            $employee->bindparam("id",$_GET['view']);
                          $employee->execute();
                          foreach ($employee as $key ) {
                          	                      
                         ?>

					<tr>
							<th class="text-center"><?php echo $x;?></th>
							<td class="text-center">
							
							<p class="truncate"><b><?php echo $key['First_Name']." ".$key['Last_Name'];?></b>
						</td>
					
							</td>
					         
						<td class="text-center">
							<button type="button" class="btn btn-default btn-sm btn-flat border-info wave-effect text-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
								Action
							</button>
							<div class="dropdown-menu">
								<a class="dropdown-item view_evaluation" href="http://localhost/Admin%20PageEmployee/View%20Employee%20Rating.php?view=<?php echo $key['employee_id'];?>" data-id="">View</a>
							
								
								<div class="dropdown-divider"></div>
							<form method="POST"><button class="dropdown-item delete_evaluation" type="submit" name="remove" value="<?php echo $key['employee_id'];?>" data-id="">Delete</button>
							</div>
						</td>
					</tr>
         <?php $x++;}}?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<style>
	table p {
		margin: unset !important;
	}

	table td {
		vertical-align: middle !important
	}
</style>
<!-- <script>
	$(document).ready(function() {
		$('#list').dataTable()

		$('.delete_project').click(function() {
			_conf("Are you sure to delete this project?", "delete_project", [$(this).attr('data-id')])
		})
	})

	function delete_project($id) {
		start_load()
		$.ajax({
			url: 'ajax.php?action=delete_project',
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
</script> -->