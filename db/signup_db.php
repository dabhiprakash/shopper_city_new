<?php
require_once "connection.php";
if(isset($_POST['register'])){
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    // Get form data
    $firstName = $_POST['register-first-name'];
    $lastName = $_POST['register-last-name'];
    $mobile = $_POST['register-mobile-number'];
    $email = $_POST['register-email'];
    $password = $_POST['register-password'];
    $createAt = date("Y-m-d H:i:s");
    $newPass =  password_hash($password, PASSWORD_DEFAULT);
    $sel_admin_qry  = "select * from users where email='$email'";
    $sel_admin      = mysqli_query($conn,$sel_admin_qry);
    $rows           = mysqli_num_rows($sel_admin);
	$referral_id    = $_POST['register-referral'];
	$user_referral_id = time();
	
	if($rows){
		$_SESSION['error_msg'] = "alrady email is register.";
		header("Location: ../login.php");
		exit(); // Ensure no further output is sent  
	}else{
		$sql = "SELECT * FROM users WHERE referral_id = $referral_id";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		// Output data of each row
			while($row = $result->fetch_assoc()) {
				$upline_id = $row['id'];
					$sql = "INSERT INTO users (first_name, last_name,mobile, email, password,referral_id,upline_id, created_at) VALUES ('$firstName', '$lastName','$mobile', '$email', '$newPass','$user_referral_id','$upline_id', '$createAt')";
					if ($conn->query($sql) === TRUE){
						$_SESSION['success_msg'] = "register successfully.";
						header("Location: ../login.php");
						exit(); // Ensure no further output is sent  
					} else {
						$_SESSION['error_msg'] = "register faild.";
						header("Location: ../login.php");
						exit(); // Ensure no further output is sent  
				}
			}
		} else {
			$_SESSION['error_msg'] = "please enter valid refferal code.";
			header("Location: ../login.php");
			exit(); // Ensure no further output is sent  
		}
	}
    // Close database connection
    $conn->close();
}
if(isset($_POST['update'])){
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $mobile = $_POST['mobile_number'];    
    $pincode = $_POST['pincode'];    
    $mobile = $_POST['mobile_number'];    
    $user_id = $_SESSION['user_id'];
    $filename = basename($_FILES["profile_image"]["name"]);
    $old_file = $_POST["old_img"];
    $aadhar_number = $_POST['aadhar_number'];
    // Generate a unique filename to prevent overwriting existing files
    $newFilename = time() . '_' . $filename;
    $uploadDir = "../assets/images/profile_img/"; 
    $uploadPath = $uploadDir . $newFilename;
    
    if(!empty($filename)){
        if (move_uploaded_file($_FILES["profile_image"]["tmp_name"], $uploadPath)) {
            // Remove old image file
            if (!empty($old_file)) {
                $oldImagePath = $uploadDir . $old_file;
                unlink($oldImagePath);
            }
        } else {
            $_SESSION['error_msg'] = "File Not Uploaded.";
            header("Location: ../account.php");
            exit(); // Ensure no further output is sent  
        }
    }else{
        $newFilename = $old_file;
    }
    $qry = "UPDATE users SET address = '$address',city = '$city', state = '$state', country = '$country',pincode = '$pincode',aadhar_number = '$aadhar_number', mobile = '$mobile',image = '$newFilename' WHERE id = '$user_id'";
    // "update hotel_master set name='$name',address='$address',city='$city',description='$description' where id='$id'";
    $res2 = mysqli_query($conn,$qry);
    if ($res2) {
        $_SESSION['success_msg'] = "Data Update Successfully";
        header("Location: ../account.php");
        $_SESSION['address'] = $_POST['address'];
        $_SESSION['city'] = $_POST['city'];
        $_SESSION['state'] = $_POST['state'];
        $_SESSION['country'] = $_POST['country'];
        $_SESSION['pincode'] = $_POST['pincode'];
        $_SESSION['aadhar_number'] = $_POST['aadhar_number'];
        $_SESSION['old_img'] = $newFilename;
        exit(); // Ensure no further output is sent  
    } else {
        $_SESSION['error_msg'] = "Data Update Faild";
        header("Location: ../account.php");
        exit(); // Ensure no further output is sent  
    }
}
?>