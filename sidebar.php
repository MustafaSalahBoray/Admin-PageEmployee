  <style>
    .brand-link:hover {
      color: #007BFf;
      text-decoration: none;
    }
  </style>
  <aside class="main-sidebar  elevation-4" >
    <div class="dropdown">
      <a href="./" class="brand-link">

        <h3 class="text-center p-0 m-0"><b>ADMIN</b></h3>

        <!-- <h3 class="text-center p-0 m-0"><b>Evaluator</b></h3> -->

        <!-- <h3 class="text-center p-0 m-0"><b>Employee</b></h3> -->


      </a>

    </div>
    <div class="sidebar pb-4 mb-4">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-flat " data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item dropdown">
            <a href="./" class="nav-link nav-home">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="http://localhost/Admin%20PageEmployee/index.php?page=new_project" class="nav-link nav-edit_project nav-view_project">
              <i class="nav-icon fas fa-tasks"></i>
              <p>
                Tasks
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="http://localhost/Admin%20PageEmployee/index.php?page=new_project" class="nav-link nav-new_project tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Add New</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://localhost/Admin%20PageEmployee/index.php?page=project_list" class="nav-link nav-project_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>List</p>
                </a>
              </li>
            </ul>
          </li>
<!-- 
          <li class="nav-item dropdown">
            <a href="http://localhost/Admin%20PageEmployee/index.php?page=evaluation" class="nav-link nav-evaluation  nav-edit_project  nav-view_project">
              <i class="nav-icon far fa-edit"></i>
              <p>
                Evaluation
              </p>
            </a>
             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="http://localhost/Admin%20PageEmployee/index.php?page=manage_department" class="nav-link tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Add New Departments</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://localhost/Admin%20PageEmployee/index.php?page=department" class="nav-link tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>List</p>
                </a>
              </li>
            </ul>
          </li> -->
          <!--  -->
          <li class="nav-item dropdown">
            <a href="http://localhost/Admin%20PageEmployee/index.php?page=evaluation" class="nav-link nav-edit_project nav-view_project">
             <i class="nav-icon far fa-edit"></i>
              <p>
                Evaluation
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="http://localhost/Admin%20PageEmployee/index.php?page=evaluation" class="nav-link tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Evaluation Employee</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://localhost/Admin%20PageEmployee/index.php?page=EvaloationManager" class="nav-link tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Evaluation Manager</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a href="http://localhost/Admin%20PageEmployee/index.php?page=manage_department" class="nav-link nav-edit_project nav-view_project">
              <i class="nav-icon fas fa-tasks"></i>
              <p>
                Departments
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="http://localhost/Admin%20PageEmployee/index.php?page=manage_department" class="nav-link tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Add New Departments</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://localhost/Admin%20PageEmployee/index.php?page=department" class="nav-link tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>List</p>
                </a>
              </li>
            </ul>
          </li>
                 <li class="nav-item dropdown">
            <a href="#" class="nav-link nav-edit_project nav-view_project">
              <i class="nav-icon fas fa-tasks"></i>
              <p>
                Designations
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="http://localhost/Admin%20PageEmployee/index.php?page=manage_designation" class="nav-link tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Add New Designations </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://localhost/Admin%20PageEmployee/index.php?page=designation" class="nav-link tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>List</p>
                </a>
              </li>
            </ul>
          </li>
         
          <li class="nav-item">
            <a href="#" class="nav-link nav-edit_employee">
              <i class="nav-icon fas fa-user-friends"></i>
              <p>
                Employees
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="http://localhost/Admin%20PageEmployee/index.php?page=new_employee" class="nav-link nav-new_employee tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Add New</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://localhost/Admin%20PageEmployee/index.php?page=employee_list" class="nav-link nav-employee_list tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-user-friends"></i>
              <p>
                Manager
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="http://localhost/Admin%20PageEmployee/index.php?page=new_manager" class="nav-link  tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Add New</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="http://localhost/Admin%20PageEmployee/index.php?page=manager_list" class="nav-link  tree-item">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>List</p>
                </a>
              </li>
            </ul>
          </li>
         

        </ul>
      </nav>
    </div>
  </aside>
  <script>
    $(document).ready(function() {
      var page = '<?php echo isset($_GET['page']) ? $_GET['page'] : 'home' ?>';
      var s = '<?php echo isset($_GET['s']) ? $_GET['s'] : '' ?>';
      if (s != '')
        page = page + '_' + s;
      if ($('.nav-link.nav-' + page).length > 0) {
        $('.nav-link.nav-' + page).addClass('active')
        if ($('.nav-link.nav-' + page).hasClass('tree-item') == true) {
          $('.nav-link.nav-' + page).closest('.nav-treeview').siblings('a').addClass('active')
          $('.nav-link.nav-' + page).closest('.nav-treeview').parent().addClass('menu-open')
        }
        if ($('.nav-link.nav-' + page).hasClass('nav-is-tree') == true) {
          $('.nav-link.nav-' + page).parent().addClass('menu-open')
        }

      }

    })
  </script>