<?php include("../include/connection.php");
if(isset($_POST['product']) && $_POST['product'] == 'Search')
{
	$vendor_id = $_POST['vendor_id'];
	$category_id = $_POST['category_id'];
	$brand_id = $_POST['brand_id'];
	
	$query = 'SELECT * FROM product WHERE ';

	if($vendor_id > 0)
	{
		if($vendor_id > 0 && $category_id > 0)
		{
			$query .= 'vendor_id='.$vendor_id.' && category_id='.$category_id;
		}
		else if($vendor_id > 0 && $brand_id > 0)
		{
			$query .= 'vendor_id='.$vendor_id.' && brand_id='.$brand_id;
		}
		else
		{
			$query .= 'vendor_id='.$vendor_id;
		}		
	}
	else if($category_id > 0)
	{
		if($vendor_id > 0 && $category_id > 0)
		{
			$query .= 'vendor_id='.$vendor_id.' && category_id='.$category_id;
		}
		else if($category_id > 0 && $brand_id > 0)
		{
			$query .= 'category_id='.$category_id.' && brand_id='.$brand_id;
		}
		else
		{
			$query .= 'category_id='.$category_id;
		}
	}
	else if($brand_id > 0 )
	{
		if($brand_id > 0 && $category_id > 0)
		{
			$query .= 'category_id='.$category_id.' && brand_id='.$brand_id;
		}
		else if($vendor_id > 0 && $brand_id > 0)
		{
			$query .= 'vendor_id='.$vendor_id.' && brand_id='.$brand_id;
		}
		else
		{
			$query .= 'brand_id='.$brand_id;
		}
	}
	$class= $conn->query($query);
}
else if(isset($_GET['vendor_id']) && $_GET['vendor_id'] != '')
{
	$class= $conn->query('SELECT * FROM product WHERE vendor_id="'.$_GET['vendor_id'].'"');
}
else
{
	$vendor_id = '';
	$category_id = '';
	$brand_id = '';
	$class= $conn->query('SELECT * FROM product');
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
            <h1>product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">product</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">View product</h3>
			<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<div class="row">
			<div class="form-group col-md-3">
				<select id="inputStatus" name="vendor_id" class="form-control custom-select">
					<option value="0"> Select Store</option>
					<?php 
						$center = $conn->query("SELECT * FROM vendor");
						while($center_fetch=$center->fetch())
						{ ?>
							<option <?php if($vendor_id==$center_fetch['id']) { echo 'selected="selected"';}?> value="<?php echo $center_fetch['id'];?>"><?php echo $center_fetch['store_name'];?></option>
						<?php } ?>
				</select>
			</div>
			<div class="form-group col-md-3">
				<select id="inputStatus" name="category_id" class="form-control custom-select">
					<option value="0"> Select Category</option>
					<?php 
						$vendor_id=0;
						$center = $conn->query("SELECT * FROM category WHERE parent <> 0");
						while($center_fetch=$center->fetch())
						{ ?>
							<option <?php if($category_id==$center_fetch['id']) { echo 'selected="selected"';}?> value="<?php echo $center_fetch['id'];?>"><?php echo $center_fetch['name'];?></option>
						<?php } ?>
				</select>
			</div>
			<div class="form-group col-md-3">
				<select id="inputStatus" name="brand_id" class="form-control custom-select">
					<option value="0"> Select Brand</option>
					<?php 
						$vendor_id=0;
						$center = $conn->query("SELECT * FROM brand");
						while($center_fetch=$center->fetch())
						{ ?>
							<option <?php if($brand_id==$center_fetch['id']) { echo 'selected="selected"';}?> value="<?php echo $center_fetch['id'];?>"><?php echo $center_fetch['name'];?></option>
						<?php } ?>
				</select>
			</div>
			<div class="form-group col-md-3">
				<button type="submit" class="btn btn-primary" name="product" value="Search">Search</button>
			</div>
			</from>
		</div>
          
        </div>
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
					  <th style="width: 10%">
					      Vendor
                      </th>
					  <th style="width: 10%">
                          Category
                      </th>
					  <th style="width: 10%">
                          Brand
                      </th>
					  <th style="width: 15%">
                          Date
                      </th>
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
              <tbody>
			  <?php
				$i=0;
				while($f_class=$class->fetch())
				{ $i++;
				 ?>
                  <tr>
                      <td>
                          <?php echo $i; ?>
                      </td>
                      <td>
                          <a>
                             <?php echo $f_class['name']; ?>
                          </a>
                          <br/>
                          <small>
                              Created <?php echo $user->changeDate($f_class['created_by']); ?>
                          </small>
                      </td>
					  <td>
                          <a>
                             <?php echo $user->getField($f_class['vendor_id'],'vendor','store_name') ?>
                          </a>
                          <br/>
                          <a href="product.php?vendor_id=<?php echo $f_class['vendor_id']; ?>">Products</a>
                      </td>
					  <td>
                          <a>
                             <?php echo $user->getField($f_class['category_id'],'category','name'); ?>
                          </a> 
                      </td>
					  <td>
                          <a>
                             <?php echo $user->getField($f_class['brand_id'],'brand','name'); ?>
                          </a> 
                      </td>
					  
					  <td>
                          <small>
                              <b>Created :</b> <?php echo $user->changeDate($f_class['created_by']); ?><br>
							  <b>Modified :</b> <?php echo $user->changeDate($f_class['modified_by']); ?><br>
							  <b>Expire :</b> <?php echo $user->changeDate($f_class['exp_date']); ?>
                          </small>
                      </td>
                      <td class="project-actions text-right">
                          
                          <a class="btn btn-info btn-sm" href="add-product.php?id=<?php echo $f_class['id']; ?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="query.php?action=delete&name=product&id=<?php echo $f_class['id']; ?>">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
				  <?php } ?>
                  
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
