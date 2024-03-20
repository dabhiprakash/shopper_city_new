<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from d-themes.com/html/riode/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Feb 2024 12:00:39 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

<head>
    <?php
    require_once "include/header_script.php";
    ?>
</head>

<body>
    <div class="page-wrapper">
        <?php
        require_once "include/header.php";
        ?>
        <main class="main">
            <div class="page-content mt-6 pb-2 mb-10">
                <div class="container">
                    <div class="login-popup">
                        <div class="form-box">
                            <div class="tab tab-nav-simple tab-nav-boxed form-tab">
                                <ul class="nav nav-tabs nav-fill align-items-center border-no justify-content-center mb-5"
                                    role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link border-no lh-1 ls-normal" href="#signin">Login</a>
                                    </li>
                                </ul>
                                <div class="tab-content ">
                                    <div class="tab-pane active" id="signin">
                                        <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        </h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s,</p>

                                        <a href="#" id="PayNow"
                                            class="btn btn-rounded btn-blue btn-block btn-gradient d-flex align-items-center justify-content-center">Buy
                                            Now...</a>
                                    </div>
                                </div>
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

    <a id="scroll-top" href="#top" title="Top" role="button" class="scroll-top"><i class="d-icon-arrow-up"></i></a>
    <?php
    require_once "include/mobile-menu.php";
    ?>
    <?php
    require_once "include/footer_script.php";
    ?>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        //Pay Amount
        jQuery(document).ready(function ($) {
            jQuery("#PayNow").click(function (e) {
                var paymentOption = "";
                let billing_name = 'test';
                let billing_mobile = 9328797950;
                let billing_email = "dabhiprakash32244@gmail.com";
                var shipping_name = "<?php echo $_SESSION['first_name'];
                echo $_SESSION['last_name']; ?>";
                var shipping_mobile = "<?php echo $_SESSION['mobile']; ?>";
                var shipping_email = "<?php echo $_SESSION['email']; ?>";
                var paymentOption = "netbanking";
                var payAmount = 10;

                var request_url = "submitpayment.php";
                var formData = {
                    billing_name: billing_name,
                    billing_mobile: billing_mobile,
                    billing_email: billing_email,
                    shipping_name: shipping_name,
                    shipping_mobile: shipping_mobile,
                    shipping_email: shipping_email,
                    paymentOption: paymentOption,
                    payAmount: payAmount,
                    action: "payOrder",
                };

                $.ajax({
                    type: "POST",
                    url: request_url,
                    data: formData,
                    dataType: "json",
                    encode: true,
                }).done(function (data) {
                    if (data.res == "success") {
                        var orderID = data.order_number;
                        var orderNumber = data.order_number;
                        var options = {
                            key: data
                                .razorpay_key, // Enter the Key ID generated from the Dashboard
                            amount: data.userData
                                .amount, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
                            currency: "INR",
                            name: "Tutorialswebsite", //your business name
                            description: data.userData.description,
                            image: "https://www.tutorialswebsite.com/wp-content/uploads/2022/02/cropped-logo-tw.png",
                            order_id: data.userData
                                .rpay_order_id, //This is a sample Order ID. Pass
                            handler: function (response) {
                                window.location.replace("payment-success.php?oid=" +
                                    orderID + "&rp_payment_id=" + response
                                        .razorpay_payment_id + "&rp_signature=" + response
                                        .razorpay_signature);
                            },
                            modal: {
                                ondismiss: function () {
                                    window.location.replace("payment-success.php?oid=" +
                                        orderID);
                                },
                            },
                            prefill: {
                                //We recommend using the prefill parameter to auto-fill customer's contact information especially their phone number
                                name: data.userData.name, //your customer's name
                                email: data.userData.email,
                                contact: data.userData
                                    .mobile, //Provide the customer's phone number for better conversion rates
                            },
                            notes: {
                                address: "Tutorialswebsite",
                            },
                            config: {
                                display: {
                                    blocks: {
                                        banks: {
                                            name: "Pay using " + paymentOption,
                                            instruments: [{
                                                method: paymentOption,
                                            },],
                                        },
                                    },
                                    sequence: ["block.banks"],
                                    preferences: {
                                        show_default_blocks: true,
                                    },
                                },
                            },
                            theme: {
                                color: "#3399cc",
                            },
                        };
                        var rzp1 = new Razorpay(options);
                        rzp1.on("payment.failed", function (response) {
                            window.location.replace("payment-failed.php?oid=" + orderID +
                                "&reason=" + response.error.description +
                                "&paymentid=" + response.error.metadata.payment_id);
                        });
                        rzp1.open();
                        e.preventDefault();
                    }
                });
            });
        });
    </script>
</body>

</html>