<?php include("../include/connection.php");
if(isset($_GET['id']) && $_GET['id'] != '')
{
	$button="Update";
	$name=$user->getField($_GET['id'],'vendor','name'); 
	$youtube_link=$user->getField($_GET['id'],'vendor','youtube_link'); 
	$country= $user->getField($_GET['id'],'vendor','country_id'); 
	$state= $user->getField($_GET['id'],'vendor','state_id');
	$city= $user->getField($_GET['id'],'vendor','city_id');
	$plan_id= $user->getField($_GET['id'],'vendor','plan_id');
	$store_name=$user->getField($_GET['id'],'vendor','store_name');
	$email=$user->getField($_GET['id'],'vendor','email');
	$v_username=$user->getField($_GET['id'],'vendor','username');
	$v_password=$user->getField($_GET['id'],'vendor','password');
	$street=$user->getField($_GET['id'],'vendor','street');
	$zipcode=$user->getField($_GET['id'],'vendor','zipcode');
	$lat=$user->getField($_GET['id'],'vendor','lat');
	$long=$user->getField($_GET['id'],'vendor','longitude');
	$image=$user->getField($_GET['id'],'vendor','image');
	$banner=$user->getField($_GET['id'],'vendor','banner');
	$contact=$user->getField($_GET['id'],'vendor','contact');
	$category_id=$user->getField($_GET['id'],'vendor','category_id');
	$desc_1=$user->getField($_GET['id'],'vendor','desc_1');
	$desc_2=$user->getField($_GET['id'],'vendor','desc_2');
	$delivery_status=$user->getField($_GET['id'],'vendor','delivery_status');
	$sup_category_id=$user->getField($category_id,'category','id');

}
else
{
	$button="Save";
	$name='';
	$country= 0; 
	$state= 0;
	$city= 0;
	$youtube_link=0;
	$plan_id=0;
	$store_name='';
	$email='';
	$username1='';
	$password1='';
	$street='';
	$zipcode='';
	$lat='';
	$long='';
	$image='';
	$banner='';
	$contact='';
	$category_id='';
	$sup_category_id='';
	$v_username="" ;
	$v_password="";
	$desc_1="";
	$desc_2="";
	$delivery_status="0";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add vendor | Shopervendor</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <style> .col-md-6{ float:left;}</style>
</head>
<body class="hold-transition sidebar-mini">
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
            <h1>vendor</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">vendor</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">vendor</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="query.php"  enctype="multipart/form-data">
                <div class="card-body">
					 <div class="form-group col-md-6">
						<label for="exampleInputEmail1">Enter vendor name</label>
						<input type="text" class="form-control" name="name" placeholder="Enter vendor Name" value="<?php echo $name; ?>">
					 </div>
					 <div class="form-group col-md-6">
						<label for="exampleInputEmail1">Enter Store name</label>
						<input type="text" class="form-control" name="store_name" placeholder="Enter store Name" value="<?php echo $store_name; ?>">
					 </div>
					 <div class="form-group col-md-6">
						<label for="inputStatus">Subscription Plan</label>
						<select id="inputStatus" name="plan_id" class="form-control custom-select">
						  <option value="0"> Select Plan</option>
						  <?php 
							$center = $conn->query("SELECT * FROM subscription");
							while($center_fetch=$center->fetch())
							{ ?>
								<option <?php if($plan_id==$center_fetch['id']) { echo 'selected="selected"';}?> value="<?php echo $center_fetch['id'];?>"><?php echo '<b>'.$center_fetch['name'].'</b> - '.$center_fetch['month'].' Month- Rs '.$center_fetch['price'];?></option>
							<?php } ?>
						</select>
					  </div>
					 <div class="form-group col-md-6">
						<label for="exampleInputEmail1">Enter Email Address</label>
						<input type="text" class="form-control" name="email" placeholder="Enter Email Address" value="<?php echo $email; ?>">
					 </div>
					 <div class="form-group col-md-6">
						<label for="exampleInputEmail1">Enter Username</label>
						<input type="text" class="form-control" name="username" placeholder="" value="<?php echo $v_username; ?>">
					 </div>
					 <div class="form-group col-md-6">
						<label for="exampleInputEmail1">Enter Password</label>
						<input type="password" class="form-control" name="password" placeholder="" value="<?php echo $v_password; ?>">
					 </div>
					 <div class="form-group col-md-6">
						<label for="exampleInputEmail1">Street</label>
						<input type="text" class="form-control" name="street" placeholder="" value="<?php echo $street; ?>">
					 </div>
					 <div class="form-group col-md-6">
						<label for="inputStatus">City</label>
						<select id="inputStatus" name="city_id" class="form-control custom-select">
						  <option value="0"> Select City</option>
						  <?php 
							$center = $conn->query("SELECT * FROM city");
							while($center_fetch=$center->fetch())
							{ ?>
								<option <?php if($city==$center_fetch['id']) { echo 'selected="selected"';}?> value="<?php echo $center_fetch['id'];?>"><?php echo $center_fetch['name'];?></option>
							<?php } ?>
						</select>
					  </div>		  
					  <div class="form-group col-md-6">
						<label for="inputStatus">State</label>
						<select id="inputStatus" name="state_id" class="form-control custom-select">
						  <option value="0"> Select State</option>
						  <?php 
							$center = $conn->query("SELECT * FROM state");
							while($center_fetch=$center->fetch())
							{ ?>
								<option <?php if($state==$center_fetch['id']) { echo 'selected="selected"';}?> value="<?php echo $center_fetch['id'];?>"><?php echo $center_fetch['name'];?></option>
							<?php } ?>
						</select>
					  </div>
					  <div class="form-group col-md-6">
						<label for="inputStatus">Country</label>
						<select id="inputStatus" name="country_id" class="form-control custom-select">
						  <option value="0"> Select Country</option>
						  <?php 
							$center = $conn->query("SELECT * FROM country");
							while($center_fetch=$center->fetch())
							{ ?>
								<option <?php if($country==$center_fetch['id']) { echo 'selected="selected"';}?> value="<?php echo $center_fetch['id'];?>"><?php echo $center_fetch['name'];?></option>
							<?php } ?>
						</select>
					  </div>
					 <div class="form-group col-md-6">
						<label for="exampleInputEmail1">Zipcode</label>
						<input type="text" class="form-control" name="zipcode" placeholder="Enter zipcode Name" value="<?php echo $zipcode; ?>">
					 </div>
					 <div class="form-group col-md-6">
						<label for="exampleInputEmail1">Contact</label>
						<input type="text" class="form-control" name="contact" placeholder="Enter contact Name" value="<?php echo $contact; ?>">
					 </div>
					 <div class="form-group col-md-6">
						<label for="exampleInputEmail1">Enter Latitude</label>
						<input type="text" class="form-control" name="lat" placeholder="Enter vendor Name" value="<?php echo $lat; ?>">
					 </div>
					 <div class="form-group col-md-6">
						<label for="exampleInputEmail1">Enter Longitude</label>
						<input type="text" class="form-control" name="long" placeholder="Enter vendor Name" value="<?php echo $long; ?>">
					 </div>
					 <div class="form-group col-md-6">
						<label for="exampleInputEmail1">Category</label>
						<select id="inputStatus" name="sup_category_id" class="form-control custom-select">
						  <option value="0"> Select Category</option>
						  <?php 
							$center = $conn->query("SELECT * FROM category WHERE parent= 0");
							while($center_fetch=$center->fetch())
							{ ?>
								<option <?php if($sup_category_id==$center_fetch['id']) { echo 'selected="selected"';}?> value="<?php echo $center_fetch['id'];?>"><?php echo $center_fetch['name'];?></option>
							<?php } ?>
						</select>
					 </div>
					 <div class="form-group col-md-6">
						<label for="exampleInputEmail1">Sub Category</label>
						<select id="inputStatus" name="category_id" class="form-control custom-select">
						  <option value="0"> Select Sub Category</option>
						  <?php 
							$center = $conn->query("SELECT * FROM category WHERE parent <> 0");
							while($center_fetch=$center->fetch())
							{ ?>
								<option <?php if($category_id==$center_fetch['id']) { echo 'selected="selected"';}?> value="<?php echo $center_fetch['id'];?>"><?php echo $center_fetch['name'];?></option>
							<?php } ?>
						</select>
					 </div>
					 <div class="form-group col-md-6">
						 <div class="card card-outline card-info">
							<div class="card-header">
							  <h3 class="card-title">
								Short Description
							  </h3>
							</div>
							<!-- /.card-header -->
							<div class="card-body">
							  <textarea id="summernote" name="desc_1"><?php echo $desc_1; ?></textarea>
							</div>
							<div class="card-footer">
							 
							</div>
						  </div>
						</div>
					 
					
					 <div class="form-group col-md-6">
						 <div class="card card-outline card-info">
							<div class="card-header">
							  <h3 class="card-title">
								Description
							  </h3>
							</div>
							<!-- /.card-header -->
							<div class="card-body">
							  <textarea id="summernote1" name="desc_2"><?php echo $desc_2; ?></textarea>
							</div>
							<div class="card-footer">
							 
							</div>
						  </div>
						</div>
					<div class="form-group col-md-6">
						<label for="exampleInputEmail1">Youtube Link</label>
						<input type="text" class="form-control" name="youtube_link" placeholder="Enter store Name" value="<?php echo $youtube_link; ?>">
					 </div>
					 <div class="form-group col-md-6">
						<label for="exampleInputEmail1">Delivery</label>
						<div class="row ml-0">
							<div class="form-check mr-2">
							  <input class="form-check-input" type="radio" name="delivery_status" id="exampleRadios1" value="0" <?php if($delivery_status == 0) { echo "checked"; }?>>
							  <label class="form-check-label" for="exampleRadios1">
								No
							  </label>
							</div>
							<div class="form-check mr-2">
							  <input class="form-check-input" type="radio" name="delivery_status" id="exampleRadios2" value="1" <?php if($delivery_status == 1) { echo "checked"; }?>>
							  <label class="form-check-label" for="exampleRadios2">
								Yes
							  </label>
							</div>
						</div>
					 </div>
					 <div class="clearfix"></div>
					 <div class="form-group col-md-6">
						<label for="exampleInputFile">Upload Image</label><br>
						<div class="input-group">
						  <div class="custom-file">
							<input type="file" name="image" class="custom-file-input" id="exampleInputFile">
							<label class="custom-file-label" for="exampleInputFile">Choose file</label>
						  </div>
						</div>
						<?php 
						if($image != '')
						{
							echo '<br><img src="'.URL.'vendor/profile/'.$image.'" width="100">';
							echo '<input type="hidden" name="old_img" value="'.$image.'" >';
						}
						?>
					  </div>
					  <div class="form-group col-md-6">
						<label for="exampleInputFile">Upload Banner</label>
						<div class="input-group">
						  <div class="custom-file">
							<input type="file" name="banner" class="custom-file-input" id="exampleInputFile">
							<label class="custom-file-label" for="exampleInputFile">Choose file</label>
						  </div>
						</div>
						<?php 
						if($banner != '')
						{
							echo '<br><img src="../vendor/banner/'.$banner.'" height="100">';
							echo '<input type="hidden" name="old_banner" value="'.$banner.'" >';
						}
						?>
					  </div>
					</div>
                <!-- /.card-body -->
				
				<input type="hidden" name="id" value="<?php if($_GET) {echo $_GET['id']; }?>" >
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="vendor" value="<?php echo $button; ?>"><?php echo $button; ?></button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
          <!-- right column -->
          
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
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
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
$(function () {
// Summernote
	$('#summernote').summernote();
	$('#summernote1').summernote();

// CodeMirror
	CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
	  mode: "htmlmixed",
	  theme: "monokai"
	});
})
</script>
</body>
</html>
