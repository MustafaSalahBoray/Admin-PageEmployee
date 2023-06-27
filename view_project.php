   <link rel="stylesheet" type="text/css" href="Library/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="Style.css">
  <script type="text/javascript" src="Library/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="Library/js/jquery-3.6.1.min.js"></script>
      <link rel="stylesheet" href="A-Send Task/css/bootstrap.min.css">
      <?php include 'header.php';
       include 'topbar.php' ;
       include 'sidebar.php';
        require 'DB.php';
         if (isset($_GET['view'])) {
         	
       $select=$db->prepare("SELECT * FROM  admn_task WHERE id=:id");
       $select->bindparam("id",$_GET['view']);
  if ($select->execute()) {
  	// code...
  
       foreach ($select as $key ) {

    
      
         ?>

<div class="col-lg-12">
	<div class ="container" style="width:80%;margin:auto;">
	<div class="row">
		<div class="col-md-12">
				<div class ="container" style="width:75%;margin:auto;">
			<div class="callout callout-info " style="width:1350px; margin: auto;">
				<div class="col-md-12">
					<div class="row">
						<div class="col-sm-6">
							<dl>
								<dt><b class="border-bottom border-primary">Project Name</b></dt>
								<dd><?php echo $key['Subject']?></dd>
								<dt><b class="border-bottom border-primary">Description</b></dt>
								<dd><?php echo $key['comment'] ?></dd>
							</dl>
						</div>
						<div class="col-md-6">
							<dl>
								<dt><b class="border-bottom border-primary">Start Date</b></dt>
								<dd><?php echo date("F d, Y",strtotime($key['Start'] )) ?></dd>
							</dl>
							<dl>
								<dt><b class="border-bottom border-primary">End Date</b></dt>
								<dd><?php echo date("F d, Y",strtotime($key['Endd'] )) ?></dd>
							</dl>
							<dl>
								<dt><b class="border-bottom border-primary">Status</b></dt>
								<dd>
									<?php
								  if($key['Stuts'] =='Pending'){
							  	echo "<span class='badge badge-secondary'>".$key['Stuts']."</span>";
							  
							  }elseif($key['Stuts'] =='On-Hold'){
							  	echo "<span class='badge badge-warning'>".$key['Stuts']."</span>";
							  }elseif($key['Stuts'] =='Done'){
							  	echo "<span class='badge badge-success'>".$key['Stuts']."</span>";
							  }
									?>
								</dd>
							</dl>
								
															
							<dl>
							
								<dt><b class="border-bottom border-primary">Project Manager</b></dt>
								<dd>
						
									<div class="d-flex align-items-center mt-1">
										<?php 

                       $key=$key['Manager_Name'];}}}
							      if (isset($key)) {
							      							      
                                $selectMangName=$db->prepare("SELECT * FROM manager WHERE manger_id=:id");
                                $selectMangName->bindparam("id",$key);
                                if($selectMangName->execute()){
                                    foreach ($selectMangName as $key ) {
                                    echo $key['First_Name'].$key['Last_Name'];
                                    }
                                
								?>
										<b></b>
									</div>
				
							
															</dd>
							</dl>

						</div>
					</div>
					<!--  -->
   
	                         <?php 
	                        if (isset($_GET['view'])) {
	                        	$Answer=$db->prepare("SELECT * FROM answertaskadmin WHERE id_AdminTask =:id");
                                 $Answer->bindparam("id",$_GET['view']);
                                 $Answer->execute();
                                 foreach($Answer as $key){

	                         ?>

							<dl>           
								<dt><b class="border-bottom border-primary">Answer Task</b></dt>
								<dd><?php echo $key['Comment']?></dd>
								<?php
								  if($key['Stuts'] =='Done'&&!empty($key['image'])){
								  	echo "<dl>
								<dt><b class='border-bottom border-primary'>Download</b></dt>
								<dd><a href='http://localhost/Employe%20Page%20Project%20Employee/Content/".$key['position']."'download class='btn btn-primary text-light'>Download</a>";
								  }
                    //  
							        
									?>
								
							</dl>
						
                          <?php }}?>
					<!--  -->
                
				</div>

			</div>
		</div></div>
			
	
	
			<div class="card card-outline card-primary" style="width:40%; margin: auto; margin-top: 20px;" >
				<div class="card-header text-center" >
					<span><b>Team Member/s:</b></span>
					<div class="card-tools">
						<!-- <button class="btn btn-primary bg-gradient-primary btn-sm" type="button" id="manage_team">Manage</button> -->
					</div>
				</div>
				<div class="card-body">
					<ul class="users-list clearfix">
						<?php 
						            if (isset($_GET['view'])) {
												         
									    $select=$db->prepare("SELECT * FROM  admn_task WHERE id=:id");
										 $select->bindparam("id",$_GET['view']);
										 if ($select->execute()) {
															  												  
                               foreach ($select as $key ) {		
						                                     
                  $user=explode(",", $key['Emploey_Name']);
                   $selectemployee=$db->prepare("SELECT * FROM employee");
                          $selectemployee->execute();
                          foreach ($selectemployee as $key ) { 
                          	                //   print_r($user);
                    for ($i=0; $i <count($user) ; $i++) { 
                    if ($user[$i]==$key['employee_id']) {
                    echo "<h4>"."* ".$key['First_Name']." ".$key['Last_Name']."</h4>";
                    }
                }
                 }
						?>
					   	
					
						
					</ul>
				

			</div>
		</div>
	</div>

<?php }}}}}?>
