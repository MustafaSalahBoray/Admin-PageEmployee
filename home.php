<!-- Info boxes -->
<style>
  .small-box .icon>i.fa,
  .small-box .icon>i.fab,
  .small-box .icon>i.fad,
  .small-box .icon>i.fal,
  .small-box .icon>i.far,
  .small-box .icon>i.fas,
  .small-box .icon>i.ion {
    font-size: 40px;
    top: 20px;
  }
</style>
<div class="row">
  <div class="col-12 col-sm-6 col-md-4">
    <div class="small-box bg-light shadow-sm border">
      <div class="inner">
        <h3>Total Departments</h3>
           <?php 
              require 'DB.php';
                          $SELECT_DEPARTMENT=$db->prepare("SELECT * FROM department");
                          $SELECT_DEPARTMENT->execute();
                          $SELECT_DEPARTMENT=$SELECT_DEPARTMENT->rowcount();
                          
                       echo " <h4>".$SELECT_DEPARTMENT."</h4>";    

           ?>
       
      </div>
      <div class="icon">
        <i class="fa fa-th-list"></i>
      </div>
    </div>
  </div>
  <div class="col-12 col-sm-6 col-md-4">
    <div class="small-box bg-light shadow-sm border">
      <div class="inner">
        <h3>Total Designations</h3>

         <?php 
              require 'DB.php';
              $degisnation=$db->prepare("SELECT * FROM degisnation");
                          $degisnation->execute();
                          $degisnation=$degisnation->rowcount();
                          
                       echo " <h4>".$degisnation."</h4>";    

           ?>
      </div>
      <div class="icon">
        <i class="fa fa-list-alt"></i>
      </div>
    </div>
  </div>
  <div class="col-12 col-sm-6 col-md-4">
    <div class="small-box bg-light shadow-sm border">
      <div class="inner">
        <h3>Total Employees</h3>

         <?php 
              require 'DB.php';
              $employee=$db->prepare("SELECT * FROM employee");
                          $employee->execute();
                          $employee=$employee->rowcount();
                          
                       echo " <h4>".$employee."</h4>";    

           ?>
      </div>
      <div class="icon">
        <i class="fa fa-users"></i>
      </div>
    </div>
  </div>
 
  <div class="col-12 col-sm-6 col-md-4">
    <div class="small-box bg-light shadow-sm border">
      <div class="inner">
        <h3>Total Evaluators</h3>

         <?php 
              require 'DB.php';
              $evaluation=$db->prepare("SELECT * FROM evaluation");
                          $evaluation->execute();
                          $evaluation=$evaluation->rowcount();
                          
                       echo " <h4>".$evaluation."</h4>";    

           ?>
      </div>
      <div class="icon">
        <i class="fa fa-user-secret"></i>
      </div>
    </div>
  </div>
  <div class="col-12 col-sm-6 col-md-4">
    <div class="small-box bg-light shadow-sm border">
      <div class="inner">
        <h3>Total Tasks</h3>
<?php 
              require 'DB.php';
              $admn_task=$db->prepare("SELECT * FROM admn_task");
                          $admn_task->execute();
                          $admn_task=$admn_task->rowcount();
                          
                       echo " <h4>".$admn_task."</h4>";    

           ?>      </div>
      <div class="icon">
        <i class="fa fa-tasks"></i>
      </div>
    </div>
  </div>
</div>


<div class="col-12">
  <div class="card">
    <div class="card-body">
      <?php 
          if (isset($_SESSION['admin'])) {
            echo "  Welcome ! <b>".$_SESSION['admin']->name."</b>";
          

   }

      ?>
    
    </div>
  </div>
</div>