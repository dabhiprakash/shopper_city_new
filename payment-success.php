<?php
require_once "db/connection.php";
if (isset($_GET)) {
    if ($_GET['rp_payment_id']) {
        $order_id = $_GET['rp_payment_id'];
        $user_id = $_SESSION['user_id'];
        $created_at = date("Y-m-d H:i:s");

        // Define commission percentages for each level
        $level1_percentage = 0.25; // 25% for direct upline
        $level2_percentage = 0.10; // 10% for second level upline
        $level3_percentage = 0.10; // 10% for third level upline

        // Calculate commission amounts
        $total_payment = 2000; // Total payment
        $level1_commission = $total_payment * $level1_percentage;
        $level2_commission = $total_payment * $level2_percentage;
        $level3_commission = $total_payment * $level3_percentage;
        // Insert transaction for the user
        $sql = "INSERT INTO transaction (order_id, user_id, balance, created_at) VALUES ('$order_id', '$user_id', '$total_payment', '$created_at')";
        // Check if the transaction was successful
        if ($conn->query($sql) === TRUE) {
            // Update user balance with level 1 commission
            $get_user = "SELECT upline_id FROM users WHERE id = '$user_id'";
            $qry1 = "select upline_id from users where id='$user_id'";
            $res = mysqli_query($conn, $qry1);
            $rows = mysqli_fetch_array($res);
            $dirst_level_upline_id = $rows['upline_id'];
            $update_balance_sql = "UPDATE users SET balance = balance + $level1_commission WHERE id = '$dirst_level_upline_id'";
            $qry2 = "INSERT INTO transaction (order_id, user_id, balance, created_at) VALUES ('$order_id', '$dirst_level_upline_id',' $level1_commission', '$created_at')";
            $conn->query($qry2);
            $conn->query($update_balance_sql);
            // Get user's upline (level 1)
            $level1_upline_sql = "SELECT upline_id FROM users WHERE id = '$dirst_level_upline_id'";
            $level1_upline_result = $conn->query($level1_upline_sql);

            if ($level1_upline_result->num_rows > 0) {
                $level1_upline_row = $level1_upline_result->fetch_assoc();
                $level1_upline_id = $level1_upline_row['upline_id'];
                // Update level 1 upline's balance with level 2 commission
                $update_level2_balance_sql = "UPDATE users SET balance = balance + $level2_commission WHERE id = '$level1_upline_id'";
                $conn->query($update_level2_balance_sql);
                $qry3 = "INSERT INTO transaction (order_id, user_id, balance, created_at) VALUES ('$order_id', '$level1_upline_id','$level2_commission', '$created_at')";
                $conn->query($qry3);
                // Get level 2 upline
                $level2_upline_sql = "SELECT upline_id FROM users WHERE id = '$level1_upline_id'";
                $level2_upline_result = $conn->query($level2_upline_sql);

                if ($level2_upline_result->num_rows > 0) {
                    $level2_upline_row = $level2_upline_result->fetch_assoc();
                    $level2_upline_id = $level2_upline_row['upline_id'];
                    $update_level3_balance_sql = "UPDATE users SET balance = balance + $level3_commission WHERE id = '$level2_upline_id'";
                    $qry4 = "INSERT INTO transaction (order_id, user_id, balance, created_at) VALUES ('$order_id', '$level2_upline_id', '$level3_commission', '$created_at')";
                    $conn->query($qry4);
                    $conn->query($update_level3_balance_sql);
                }
            }
            exit(); // Ensure no further output is sent  
        }
    }
}
?>