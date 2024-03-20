<?php
require_once "include/connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once "include/header_script.php";
    ?>
    <style>
    .profile-pic {
        width: 200px;
        max-height: 200px;
        display: inline-block;
    }

    .file-upload {
        display: none;
    }

    .circle {
        border-radius: 100% !important;
        overflow: hidden;
        width: 128px;
        height: 128px;
        border: 2px solid rgba(255, 255, 255, 0.2);
        /* position: absolute; */
        top: 72px;
    }

    img {
        max-width: 100%;
        height: auto;
    }

    .p-image {
        position: relative;
        /* top: 167px; */
        left: 83px;
        bottom: 40px;
        color: #666666;
        transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
    }

    .p-image:hover {
        transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
    }

    .upload-button {
        font-size: 1.2em;
    }

    .upload-button:hover {
        transition: all .3s cubic-bezier(.175, .885, .32, 1.275);
        color: #999;
    }
    </style>
</head>

<body>
    <div class="page-wrapper">
        <?php
        require_once "include/header.php";
        ?>
        <main class="main account">
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="demo1.html"><i class="d-icon-home"></i></a></li>
                        <li>Account</li>
                    </ul>
                </div>
            </nav>
            <div class="page-content mt-4 mb-10 pb-6">
                <div class="container">
                    <h2 class="title title-center mb-10">My Account</h2>
                    <div class="tab tab-vertical gutter-lg">
                        <ul class="nav nav-tabs mb-4 col-lg-3 col-md-4" role="tablist">
                            <li class="nav-item ">
                                <a class="nav-link active" href="#dashboard">Dashboard</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#account">Account details</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#withdrawal">withdrawal</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#change-pass">Change Password</a>
                            </li>
                        </ul>
                        <div class="tab-content col-lg-9 col-md-8">
                            <div class="tab-pane active" id="dashboard">
                                <h2>Dashboard</h2>
                                <div class="details-section">
                                    <div class="earning">
                                        <h5>Total Balance</h5>
                                        <div class="balance-box"
                                            style="width: 100%; display: flex; align-items: center; justify-content: center; flex-direction: row;">
                                            <?php
                                            $user_id = $_SESSION['user_id'];
                                            $qry1 = "SELECT balance FROM users WHERE id=$user_id";
                                            $res1 = mysqli_query($conn, $qry1);
                                            $row2 = mysqli_fetch_array($res1);
                                            ?>
                                            <h3 style="padding: 40px 100px; border: 1px solid; border-radius: 10px;">
                                                <?php echo $row2['balance']; ?>
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="earning">
                                        <h5>Total Withdrawal</h5>
                                        <table>
                                            <thead>
                                                <tr>
                                                    <td>No</td>
                                                    <td>Amount</td>
                                                    <td>Message</td>
                                                    <td>Status</td>
                                                    <td>Date</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $user_id = $_SESSION['user_id'];
                                                $qry = "SELECT * FROM withdrawals WHERE user_id=$user_id";
                                                $res = mysqli_query($conn, $qry);
                                                $count = 0;
                                                if (mysqli_num_rows($res) > 0) {
                                                    while ($row = mysqli_fetch_array($res)) {
                                                        $count++;
                                                        ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $count; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['amount']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['message']; ?>
                                                    </td>
                                                    <td>
                                                        <?php if ($row['status'] == 0) {
                                                                    echo "Processing";
                                                                } else if ($row['status'] == 1) {
                                                                    echo "Completed";
                                                                } else if ($row['status'] == 2) {
                                                                    echo "rejected";
                                                                } ?>
                                                    </td>
                                                    <td>
                                                        <?php echo date("d-m-Y", strtotime($row['created_at'])) ?>
                                                    </td>
                                                </tr>
                                                <?php
                                                    }
                                                } else {
                                                    echo "Yet not ant withdrawal";
                                                }

                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="withdrawal">
                                <h2>withdrawal</h2>
                                <div class="withdrawal-box">
                                    <form action="db/withdrawal_db.php" method="post">
                                        <label>Enter your UPI ID</label>
                                        <input type="text" class="form-control" name="upi" required>
                                        <label class="mt-2">Enter withdrawal Amount Minimum(3000) Maximum(1000) </label>
                                        <input type="number" class="form-control" name="amount" required>
                                        <button type="submit" name="withdraw"
                                            class="btn btn-primary mt-2">Withdrawal</button>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane" id="change-pass">
                                <form action="db/changepass_db.php" method="post">
                                    <legend>Password Change</legend>
                                    <label>Current password (leave blank to leave unchanged)</label>
                                    <input type="password" class="form-control" name="current_password" required>
                                    <label>New password (leave blank to leave unchanged)</label>
                                    <input type="password" class="form-control" name="new_password" required>
                                    <label>Confirm new password</label>
                                    <input type="password" class="form-control" name="confirm_password" required>
                                    <button type="submit" class="btn btn-primary mt-2">SAVE CHANGES</button>
                                </form>
                            </div>
                            <div class="tab-pane" id="account">
                                <form action="db/signup_db.php" class="form" method="post" id="register-form"
                                    enctype="multipart/form-data">
                                    <div class="small-12 medium-2 large-2 columns">
                                        <div class="circle">
                                            <img class="profile-pic"
                                                src="<?php if (!empty ($_SESSION['old_img'])) {
                                                    echo "assets/images/profile_img/" . $_SESSION['old_img'];
                                                } else { ?>https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg<?php } ?>">
                                        </div>
                                        <div class="p-image">
                                            <i class="fa fa-camera upload-button"></i>
                                            <input type="hidden" name="old_img"
                                                value="<?php echo $_SESSION['old_img']; ?>">
                                            <div class="form-group">
                                                <input class="file-upload" name="profile_image" type="file"
                                                    accept="image/*" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group mb-2">
                                            <label>First Name *</label>
                                            <input type="text" class="form-control m-0" name="first_name"
                                                value="<?php echo $_SESSION['first_name']; ?>" required>

                                        </div>
                                        <div class="col-sm-6 form-group mb-2">
                                            <label>Last Name *</label>
                                            <input type="text" class="form-control m-0" name="last_name"
                                                value="<?php echo $_SESSION['last_name']; ?>" required>

                                        </div>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Mobile Number *</label>
                                        <input type="text" class="form-control m-0" name="mobile_number"
                                            value="<?php echo $_SESSION['mobile']; ?>" required>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Address *</label>
                                        <input type="text" class="form-control m-0" name="address"
                                            value="<?php echo $_SESSION['address']; ?>" required>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label class="mt-2">City *</label>
                                        <input type="text" class="form-control" name="city"
                                            value="<?php echo $_SESSION['city']; ?>" required>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label class="mt-2">State *</label>
                                        <input type="text" class="form-control m-0"
                                            value="<?php echo $_SESSION['state']; ?>" name="state" required>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label class="mt-2">Country *</label>
                                        <input type="text" class="form-control m-0"
                                            value="<?php echo $_SESSION['country']; ?>" name="country" required>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label class="mt-2">Postal Code *</label>
                                        <input type="text" class="form-control m-0"
                                            value="<?php echo $_SESSION['pincode']; ?>" name="pincode" required>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label class="mt-2">Aadhar *</label>
                                        <input type="text" class="form-control m-0"
                                            value="<?php echo $_SESSION['aadhar_number']; ?>" name="aadhar_number"
                                            required>
                                    </div>
                                    <button type="submit" name="update" class="btn btn-primary mt-2">SAVE
                                        CHANGES</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php
        require_once "include/footer.php";
        ?>
    </div>
    <?php
    require_once "include/mobile-menu.php";
    ?>

    <?php
    require_once "include/footer_script.php";
    ?>
    <script>
    $(document).ready(function() {
        var readURL = function(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('.profile-pic').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $(".file-upload").on('change', function() {
            readURL(this);
        });
        $(".upload-button").on('click', function() {
            $(".file-upload").click();
        });
    });
    $(function() {
        $('#register-form').validate({
            rules: {
                first_name: {
                    required: true,
                },
                last_name: {
                    required: true,
                },
                email: {
                    required: true,
                    email: true
                },
                mobile: {
                    required: true,
                },
                address: {
                    required: true,
                },
                city: {
                    required: true,
                },
                state: {
                    required: true,
                },
                country: {
                    required: true,
                },
                pincode: {
                    required: true,
                },
                aadhar_number: {
                    required: true,
                },
                image: {
                    required: true,
                    accept: "image/*", // Accept only image files
                    filesize: 2048576, // Maximum file size in bytes (2MB)
                },
            },
            messages: {
                first_name: {
                    required: "Please enter your first name",
                },
                last_name: {
                    required: "Please enter your last name",
                },
                email: {
                    required: "Please enter your email",
                    email: "Please enter a valid email address"
                },
                mobile: {
                    required: "Please enter your mobile number",
                    min: 10,
                    max: 10,
                },
                address: {
                    required: "Please enter your Address ",
                },
                city: {
                    required: "Please enter your city ",
                },
                state: {
                    required: "Please enter your state ",
                },
                country: {
                    required: "Please enter your country ",
                },
                pincode: {
                    required: "Please enter your postal code number",
                },
                aadhar_number: {
                    required: "Please enter your addhar number",
                },
                image: {
                    required: "Please select an image file",
                    accept: "Please upload a valid image file",
                    filesize: "The image file size should not exceed 2MB",
                    // You can add more specific error messages here
                },
            },
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback text-danger');
                element.closest('.form-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid text-danger');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });
    });
    </script>
</body>

</html>