<?php include("../include/connection.php");
if(isset($_GET['id']) && $_GET['id'] != '')
{
	$button="Update";
	$name=$user->getField($_GET['id'],'product','name'); 
	$category_id=$user->getField($_GET['id'],'product','category_id');
	$price=$user->getField($_GET['id'],'product','price');
	$sale_price=$user->getField($_GET['id'],'product','sale_price');
	$brand_id=$user->getField($_GET['id'],'product','brand_id');
	$vendor_id=$user->getField($_GET['id'],'product','vendor_id');
	$exp_date=$user->getField($_GET['id'],'product','exp_date');
	$contact=$user->getField($_GET['id'],'product','contact');	
	$description=$user->getField($_GET['id'],'product','description');
	$short_description=$user->getField($_GET['id'],'product','short_description');
	$image=$user->getField($_GET['id'],'product','image');
	$youtube_link=$user->getField($_GET['id'],'product','youtube_link');
	$sup_category_id=$user->getField($category_id,'category','id');
	$discount_id=$user->getField($_GET['id'],'product','discount_id');
}
else
{
	$button="Save";
	$youtube_link='';
	$name='';
	$category_id='';
	$price='';
	$sale_price='';
	$brand_id='';
	$vendor_id='';
	$exp_date='';
	$contact='';	
	$description='';
	$short_description='';
	$image='';
	$sup_category_id='';
	$discount_id='';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add product | Shoperproduct</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>

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
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="query.php"  enctype="multipart/form-data">
                <div class="card-body">
					<div class="form-group col-md-6">
						<label for="exampleInputEmail1">Enter product name</label>
						<input type="text" class="form-control" name="name" placeholder="Enter product Name" value="<?php echo $name; ?>">
					</div>
					
					 <div class="form-group col-md-6">
						<label for="exampleInputEmail1">Category</label>
						<select id="inputStatus" name="sup_category_id" class="form-control custom-select">
						  <option value="0"> Select Category</option>
						  <?php 
							$center = $conn->query("SELECT * FROM category WHERE parent=0");
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
							$center = $conn->query("SELECT * FROM category WHERE parent<>'0'");
							while($center_fetch=$center->fetch())
							{ ?>
								<option <?php if($category_id==$center_fetch['id']) { echo 'selected="selected"';}?> value="<?php echo $center_fetch['id'];?>"><?php echo $center_fetch['name'];?></option>
							<?php } ?>
						</select>
					 </div>
					 <div class="form-group col-md-6">
						<label for="exampleInputEmail1">Discount</label>
						<select id="inputStatus" name="discount_id" class="form-control custom-select">
						  <option value="0"> Select Discount</option>
						  <?php 
							$center = $conn->query("SELECT * FROM discount");
							while($center_fetch=$center->fetch())
							{ ?>
								<option <?php if($discount_id==$center_fetch['id']) { echo 'selected="selected"';}?> value="<?php echo $center_fetch['id'];?>"><?php echo $center_fetch['name'];?></option>
							<?php } ?>
						</select>
					 </div>
					 <div class="form-group col-md-6">
						<label for="exampleInputEmail1">Price</label>
						<input type="text" class="form-control" name="price" placeholder="Price" value="<?php echo $price; ?>">
					 </div>
					 <div class="form-group col-md-6">
						<label for="exampleInputEmail1">Sales Price</label>
						<input type="text" class="form-control" name="sale_price" placeholder="Sale Price" value="<?php echo $sale_price; ?>">
					 </div>
					 
					 <div class="form-group col-md-6">
						<label for="inputStatus">Brand</label>
						
						<input type="text" list="brand" name="brand_id" class="form-control" />
						<datalist id="brand">							
						  <option value="0"> Select Brand</option>
						  <?php 
							$center = $conn->query("SELECT * FROM brand");
							while($center_fetch=$center->fetch())
							{ ?>
								<option><?php echo $center_fetch['name'];?></option>
							<?php } ?>
						</datalist>
					  </div>		  
					  <div class="form-group col-md-6">
						<label for="inputStatus">Vendor</label>
						<select id="inputStatus" name="vendor_id" class="form-control custom-select">
						  <option value="0"> Select Vendor</option>
						  <?php 
							$center = $conn->query("SELECT * FROM vendor");
							while($center_fetch=$center->fetch())
							{ ?>
								<option <?php if($vendor_id==$center_fetch['id']) { echo 'selected="selected"';}?> value="<?php echo $center_fetch['id'];?>"><?php echo $center_fetch['store_name'].' ('.$center_fetch['name'].')';?></option>
							<?php } ?>
						</select>
					  </div>
					  <div class="form-group col-md-6">
					 	<label>Youtube link:</label>
					 	<div class="input-group">
							<div class="input-group-prepend">
							  <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
							</div>
							<input type="text" class="form-control" name="youtube_link" value="<?php echo $youtube_link; ?>" >
						  </div>
						
					 </div>
					 <div class="form-group col-md-6">
					 	<label>Expire Date:</label>
					 	<div class="input-group">
							<div class="input-group-prepend">
							  <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
							</div>
							<input type="text" class="form-control" name="exp_date" value="<?php echo $exp_date; ?>" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
						  </div>
						
					 </div>
					
						<input type="hidden" class="form-control" name="contact" placeholder="Enter contact Name" value="<?php echo $contact; ?>">
					
					 <div class="form-group col-md-6">
						 <div class="card card-outline card-info">
							<div class="card-header">
							  <h3 class="card-title">
								Short Description
							  </h3>
							</div>
							<!-- /.card-header -->
							<div class="card-body">
							  <textarea id="summernote" name="short_description"><?php echo $short_description; ?></textarea>
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
							  <textarea id="summernote1" name="description"><?php echo $description; ?></textarea>
							</div>
							<div class="card-footer">
							 
							</div>
						  </div>
						</div>
					 
					 <div class="clearfix"></div>
					 <div class="form-group col-md-6">
						<label for="exampleInputFile">Upload Front Image</label><br>
						<div class="input-group">
						  <div class="custom-file">
							<input type="file" name="image" class="custom-file-input" id="exampleInputFile">
							<label class="custom-file-label" for="exampleInputFile">Choose file</label>
						  </div>
						</div>
						<?php 
						if($image != '')
						{
							echo '<br><img src="'.URL.'product/'.$image.'" width="100">';
						}
						?>
					  </div>
					  <div class="form-group col-md-6">
						<label for="exampleInputFile">Upload Images Gallery</label>
						<div class="input-group">
						  <div class="custom-file">
							<input type="file" name="images[]" multiple="multiple" class="custom-file-input" id="exampleInputFile">
							<label class="custom-file-label" for="exampleInputFile">Choose file</label>
						  </div>
						</div><br>
						<?php $k=0;
						if(isset($_GET['id']) && $_GET['id'] != ''){
							$product_gallery = $conn->query("SELECT * FROM product_gallery WHERE product_id='".$_GET['id']."'");
							while($productg_fetch=$product_gallery->fetch())
							{
								$k++;
								echo '<div id="'.$productg_fetch['id'].'" style="float:left;" align="center"><img style="padding-top:20px;" src="'.URL.'product/images/'.$productg_fetch['image'].'" width="80" height="80" align="center"><br><input type="checkbox" name="id" value="'.$productg_fetch['id'].'"></div>';
								
								if($k%5==0)
								{
									echo '<div class="clearfix"></div>';
								}
							}
						}
						if(isset($_GET['id']) && $_GET['id'] != '')
						{
							if($product_gallery->rowCount() > 0 ){
						?><div class="clearfix"></div><br><br>
						<button type="button" name="delete" id="delete">Delete</button>
						<?php } }?>
					  </div>
					</div>
					<script>
						$(document).ready(function(){
						 $('#delete').click(function(){
						 if(confirm("Are you sure to delete?"))
						 {
						 var id = [];
						 $(':checkbox:checked').each(function(i){
						 id[i] = $(this).val();
						 });
						 if(id.length === 0)
						 {
						 alert("Please Select Checkbox");
						 }
						 else
						 {
						 $.ajax({
						 url:"delete_entry.php",
						 method: "POST",
						 data:{id:id},
						 success:function()
						 {
						 for(var i =0; i<id.length; i++)
						 {
						 $('div#'+id[i]+'').css('background-color', '#ccc');
						 $('div#'+id[i]+'').fadeOut('slow');
						 }
						 }
						 });
						 }
						 }
						 });
						});
					</script>
                <!-- /.card-body -->
				<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" >
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="product" value="<?php echo $button; ?>"><?php echo $button; ?></button>
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
<!-- Bootstrap 4 -->d
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
</script>
<script>
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
