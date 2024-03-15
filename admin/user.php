<?php 
    include("../db/connection.php");
    if(isset($_POST['submit'])){
        $user_id = $_POST['user_id'];
        $status = $_POST['status'];
        $qry = "UPDATE users SET status ='$status'  WHERE id = '$user_id'";
        $res = mysqli_query($conn,$qry);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Projects</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <?php include("nav.php"); ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include("sidebar.php"); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          #
                      </th>
                      <th style="width: 20%">
                          Name
                      </th>
					  <th style="width: 5%">
                      email
                      </th>
					  <th style="width: 20%">
                      mobile
                      </th>
                      <th style="width: 20%">
                      address
                      </th>
                      <th style="width: 20%">
                      date
                      </th>
                      <th style="width: 20%">
                      user status
                      </th>
                  </tr>
              </thead>
              <tbody>
			  <?php
				$i=0;
                $qry = "SELECT * FROM users";
                $res = mysqli_query($conn, $qry);
                if(mysqli_num_rows($res) > 0) {
                    while($row = mysqli_fetch_array($res)){
                        $i++;
				 ?>
                  <tr>
                      <td>
                          <?php echo $i; ?>
                      </td>
                      <td><?php echo $row['first_name'].' '.$row['last_name']; ?></td>
                      <td><?php echo $row['email']; ?></td>
                      <td><?php echo $row['mobile']; ?></td>
                      <td><?php echo $row['address'].' '. $row['city'].' '. $row['state'].' '. $row['country'] ; ?></td>
                      <td><?php echo $row['created_at']; ?></td>
                      <td>
                            <form action="user.php" method="post">
                                <select name="status" class="form-control">
                                    <option value="0" <?php if($row['status'] == 0){echo "selected"; } ?>>Active</option>
                                    <option value="1"<?php if($row['status'] == 1){echo "selected"; } ?>>Deactive</option>
                                </select>
                                <input type="hidden" name="user_id" value="<?php echo $row['id']; ?>">
                                <input type="submit" class="btn btn-primary mt-2" name="submit" value="Update">
                            </form>
                        </td>
                  </tr>
				  <?php 
                  }
                }else{
                    echo "user not found";
                }
                   ?>
                  
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0-pre
    </div>
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
