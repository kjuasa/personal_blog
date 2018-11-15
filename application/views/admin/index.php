
    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="charts.html">
          <i class="fas fa-file"></i>
            <span>Latest Articles</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="charts.html">
          <i class="fas fa-align-justify"></i>
            <span>Categories</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tables.html">
          <i class="fas fa-user"></i>
            <span>Users</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-file"></i>Latest Posts 
              <a class="float-right" href="<?php echo base_url(); ?>admin/dashboard/create">Create New Post</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Category</th>
                      <th>Author</th>
                      <th>Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach($posts as $post) : ?>
                    <tr>
                      <td><?php echo $post['id']; ?></td>
                      <td><?php echo $post['title']; ?></td>
                      <td><?php echo $post['category_name']; ?></td>
                      <td><?php echo $post['name']; ?></td>
                      <td><?php echo $post['created_at']; ?></td>
                      <td><a href="<?php echo base_url(); ?>admin/posts/edit/<?php echo $post['id']; ?>" class="btn btn-primary">Edit</a> 
                      <a href="<?php echo base_url(); ?>admin/posts/unpublish/<?php echo $post['id']; ?>" class="btn btn-warning">Unpublish</a> 
                      <a href="<?php echo base_url(); ?>admin/posts/delete/<?php echo $post['id']; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

    

         <!-- DataTables Example -->
         <div class="container">
            <div class="row">
            
           
         <div class="card mb-3 col-md-6">
            <div class="card-header">
            <i class="fas fa-align-justify"></i>
              Latest Categories</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach($categories as $category) :?>
                    <tr>
                      <td><?php echo $category['id']; ?></td>
                      <td><?php echo $category['category_name']; ?></td>
                      <td><a href="<?php echo base_url(); ?>admin/category/edit/<?php echo $post['id']; ?>" class="btn btn-primary">Edit</a> 
                      <a href="<?php echo base_url(); ?>admin/category/unpublish/<?php echo $post['id']; ?>" class="btn btn-warning">Unpublish</a> 
                      <a href="<?php echo base_url(); ?>admin/category/delete/<?php echo $post['id']; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                    <?php endforeach; ?>
                    
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

  

         <!-- DataTables Example -->
         <div class="card mb-3 col-md-6">
            <div class="card-header">
            <i class="fas fa-user"></i>
              Users</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Users</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach($users as $user) : ?>
                    <tr>
                      <td><?php echo $user['id']; ?></td>
                      <td><?php echo $user['name']; ?></td>
                      <td><a href="<?php echo base_url(); ?>admin/users/edit/<?php echo $post['id']; ?>" class="btn btn-primary">Edit</a> 
                      <a href="<?php echo base_url(); ?>admin/users/unpublish/<?php echo $post['id']; ?>" class="btn btn-warning">Unpublish</a> 
                      <a href="<?php echo base_url(); ?>admin/users/delete/<?php echo $post['id']; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>
        </div>
    </div>
</div>
        <!-- /.container-fluid -->

        

        