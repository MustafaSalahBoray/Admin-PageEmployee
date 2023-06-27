<div class="col-lg-12">
	<div class="card card-outline card-success">
		<div class="card-header">
			<div class="card-tools">
				<a class="btn btn-block btn-sm btn-default btn-flat border-primary" href="./index.php?page=new_employee"><i class="fa fa-plus"></i> Add New Employee</a>
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
						<th>Manager Name</th>
						<th>Designation</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
                          <?php 
                            require 'DB.php';
                        
							      							      
                                // $selectMangName=$db->prepare("SELECT * FROM manager WHERE manger_id=:id");
                                // $selectMangName->bindparam("id",$key);
                                // $selectMangName->execute();
                                //     foreach ($selectMangName as $ke ) {
                                //     $name= $ke['First_Name'].$ke['Last_Name'];}
                               // 
                              $selectShow=$db->prepare("SELECT * FROM employee ");
                          $selectShow->execute();
                           $x=1;
                          foreach ($selectShow as $key ) {
                    


                         ?>
					<tr>
						<th class="text-center"><?php echo $x;?></th>
						<td><b><?php echo $key['First_Name'].' '.$key['Last_Name'];?></b></td>
						<td><b><?php echo $key['Email']?></b></td>
						<td><b><?php echo $key['Department']?></b></td>
								<td><b>
									
							<?php 
                   $id=$key['Manager_Name']; 
                       $selectMangName=$db->prepare("SELECT * FROM manager WHERE manger_id=:id");
                       $selectMangName->bindparam("id",$key['Manager_Name']);
                       $selectMangName->execute();
                           foreach ($selectMangName as $ke ) {
                          echo $ke['First_Name'].$ke['Last_Name'];}   
                         
							?>
								</b></td>	
								<td><b><?php echo $key['Designation']?></b></td>		
								<td class="text-center">
							<button type="button" class="btn btn-default btn-sm btn-flat border-info wave-effect text-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
								Action
							</button>
							<div class="dropdown-menu">
								
								<a class="dropdown-item" href="http://localhost/Admin%20PageEmployee/edit_employ.php?edit=<?php echo $key['employee_id'];?>">Edit</a>
								<div class="dropdown-divider"></div>
								<form method="POST"><button class="dropdown-item delete_employee" type="submit" name="remove" value=" <?php echo $key['employee_id'];?>">Delete</button></form>
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
  	$Delete=$db->prepare("DELETE FROM employee WHERE employee_id=:id");
  	$Delete->bindparam("id",$_POST['remove']);
  	 if ($Delete->execute()) {
				   	echo "<script>alert('Done remove')</script>";
				   	   	echo "<script>window.open('http://localhost/Admin%20PageEmployee/index.php?page=employee_list','_self')</script>";
				   }
				   else{
				   	 echo "Erorr";
				   }
  	  }

?>