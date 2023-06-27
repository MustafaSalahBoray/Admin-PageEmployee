   <link rel="stylesheet" type="text/css" href="Library/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="Style.css">
  <script type="text/javascript" src="Library/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="Library/js/jquery-3.6.1.min.js"></script>
  <?php include 'header.php';
       include 'topbar.php' ;
       include 'sidebar.php';
        require 'DB.php';
        require 'footer.php';?>

<style>
	.form-check-input {
		margin-left: 0;
	}
</style>

<div class="d-flex main">

	<!-- sidebar -->

	<!-- End of sidebar -->

	<section class="container  ">

		<div class="d-flex flex-column mt-5">
			<div class="profile d-flex flex-column  mb-2">
           <?php
               if (isset($_GET['view'])) {
               require 'DB.php';
               $ShowEvaluation=$db->prepare("SELECT * FROM evaluationmanager WHERE Emploey_id =:id");
               $ShowEvaluation->bindparam("id",$_GET['view']);
                if ($ShowEvaluation->execute()) {
                     $ShowEvaluation=$ShowEvaluation->fetchAll(PDO::FETCH_ASSOC);
                     foreach ($ShowEvaluation as $key ) {
                     
                   
           ?>

				<div class="rate">

					<table class="table table-striped bg-secondary text-light">
						<thead>
							<tr>
								<?php   echo ' <form method="POST"><button
                          class="badge badge-warning badge-pill d-flex " value="'.$key['id'].'" type="submit" name="remove">
                         X
                        </button></form>';?>
								<th scope="col-3">#</th>
								<th>PERFORMANCE CATEGORY</th>
								<th scope="col" width="7%">Answer</th>
						
							</tr>
						</thead>
						<tbody> 
							<tr><form method="POST" >
								<th scope="row">1</th>
								<td>Do you have confidence in your immediate manager’s overall effectiveness? </td>
                          <td>	<?php if ($key['Q1']=='YES') {
                     	 	          echo ' <span
                          class="badge badge-warning badge-pill"
                        >
                         '. $key['Q1'].'
                        </span>' ;          	 
                     	 	       }
                     	 	       else{
                     	 	       	  echo ' <span
                          class="badge badge-danger badge-pill"
                        >
                         '. $key['Q1'].'
                        </span>' ; 
                     	 	       }?> <td>
							
								
							<tr>
								<th scope="row">2</th>
								<td>Do you feel your supervisor has the expertise and abilities to help both you and your teammates hit performance goals and succeed?</td>
                           <td>	<?php if ($key['Q2']=='YES') {
                     	 	          echo ' <span
                          class="badge badge-warning badge-pill"
                        >
                         '. $key['Q2'].'
                        </span>' ;          	 
                     	 	       }
                     	 	       else{
                     	 	       	  echo ' <span
                          class="badge badge-danger badge-pill"
                        >
                         '. $key['Q2'].'
                        </span>' ; 
                     	 	       }?> <td>
								
								
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Does your manager provide you with regular constructive feedback and insights into your performance? </td>
                         <td>	<?php if ($key['Q3']=='YES') {
                     	 	          echo ' <span
                          class="badge badge-warning badge-pill"
                        >
                         '. $key['Q3'].'
                        </span>' ;          	 
                     	 	       }
                     	 	       else{
                     	 	       	  echo ' <span
                          class="badge badge-danger badge-pill"
                        >
                         '. $key['Q3'].'
                        </span>' ; 
                     	 	       }?> <td>
							
							
							</tr>

							<tr>
								<th scope="row">4</th>
								<td>Is your supervisor open and receptive to your ideas, suggestions, and requests? </td>
								<td>	<?php if ($key['Q4']=='YES') {
                     	 	          echo ' <span
                          class="badge badge-warning badge-pill"
                        >
                         '. $key['Q4'].'
                        </span>' ;          	 
                     	 	       }
                     	 	       else{
                     	 	       	  echo ' <span
                          class="badge badge-danger badge-pill"
                        >
                         '. $key['Q4'].'
                        </span>' ; 
                     	 	       }?> <td>							

							</tr>


							<tr>
								<th scope="row">5</th>
								<td>Does management handle disagreements within the team and workplace in a professional manner?</td>

								<td>	<?php if ($key['Q5']=='YES') {
                     	 	          echo ' <span
                          class="badge badge-warning badge-pill"
                        >
                         '. $key['Q5'].'
                        </span>' ;          	 
                     	 	       }
                     	 	       else{
                     	 	       	  echo ' <span
                          class="badge badge-danger badge-pill"
                        >
                         '. $key['Q5'].'
                        </span>' ; 
                     	 	       }?> <td>
								
							</tr>

							<tr>
								<th scope="row">6</th>
								<td>Does your supervisor manage your team with a positive and healthy attitude? </td>
								<td>	<?php if ($key['Q6']=='YES') {
                     	 	          echo ' <span
                          class="badge badge-warning badge-pill"
                        >
                         '. $key['Q6'].'
                        </span>' ;          	 
                     	 	       }
                     	 	       else{
                     	 	       	  echo ' <span
                          class="badge badge-danger badge-pill"
                        >
                         '. $key['Q6'].'
                        </span>' ; 
                     	 	       }?> <td>
								

							</tr>

							<tr>
								<th scope="row">7</th>
								<td>Do your managers communicate their expectations clearly? </td>

								<td>	<?php if ($key['Q7']=='YES') {
                     	 	          echo ' <span
                          class="badge badge-warning badge-pill"
                        >
                         '. $key['Q7'].'
                        </span>' ;          	 
                     	 	       }
                     	 	       else{
                     	 	       	  echo ' <span
                          class="badge badge-danger badge-pill"
                        >
                         '. $key['Q7'].'
                        </span>' ; 
                     	 	       }?> <td>
							</tr>
							<tr>
								<th scope="row">8</th>
								<td>Are performance metrics used to gauge your individual success clearly explained? </td>
								<td>	<?php if ($key['Q8']=='YES') {
                     	 	          echo ' <span
                          class="badge badge-warning badge-pill"
                        >
                         '. $key['Q8'].'
                        </span>' ;          	 
                     	 	       }
                     	 	       else{
                     	 	       	  echo ' <span
                          class="badge badge-danger badge-pill"
                        >
                         '. $key['Q8'].'
                        </span>' ; 
                     	 	       }?> <td>							

							</tr>
							<tr>
								<th scope="row">9</th>
								<td>Does your manager foster trust and openness within your team? </td>

								<td>	<?php if ($key['Q9']=='YES') {
                     	 	          echo ' <span
                          class="badge badge-warning badge-pill"
                        >
                         '. $key['Q9'].'
                        </span>' ;          	 
                     	 	       }
                     	 	       else{
                     	 	       	  echo ' <span
                          class="badge badge-danger badge-pill"
                        >
                         '. $key['Q9'].'
                        </span>' ; 
                     	 	       }?> <td>
							
							</tr>
							<tr>
								<th scope="row">10</th>
								<td>Does your supervisor treat each member of your team fairly? </td>
								<td>	<?php if ($key['Q10']=='YES') {
                     	 	          echo ' <span
                          class="badge badge-warning badge-pill"
                        >
                         '. $key['Q10'].'
                        </span>' ;          	 
                     	 	       }
                     	 	       else{
                     	 	       	  echo ' <span
                          class="badge badge-danger badge-pill"
                        >
                         '. $key['Q10'].'
                        </span>' ; 
                     	 	       }?> <td>
								

							</tr>
						</tbody>
					</table>
					<div class="mb-3">
						<label for="exampleFormControlTextarea1" class="form-label fw-bold ">Comment</label>
						<textarea class="form-control ll" id="" rows="3" name="cooment"><?php echo $key['comment']?></textarea>
					</div>

           
				</div></form>

			</div>

            <hr>
            
<?php }}}?>
<?php
  if (isset($_POST['remove'])) {
  	$Delete=$db->prepare("DELETE FROM evaluationmanager WHERE id=:id");
  	$Delete->bindparam("id",$_POST['remove']);
  	 if ($Delete->execute()) {
				   
				   	 
				   }
				   else{
				   	 echo "Erorr";
				   }
  }

?>
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