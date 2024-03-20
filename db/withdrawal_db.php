<?php
require_once "connection.php";
if (isset ($_POST['withdraw'])) {
    $amount = $_POST['amount'];
    $upi = $_POST['upi'];
    if ($amount < 3000 || $amount > 10000) {
        $_SESSION['error_msg'] = "Withdrawal amount must be between 3000 and 10000.";
        header("Location: ../account.php");
        exit();
    }
    $userId = $_SESSION['user_id'];
    // Check user balance
    $balanceQuery = "SELECT balance FROM users WHERE id = $userId";
    $balanceResult = mysqli_query($conn, $balanceQuery);
    $row = mysqli_fetch_assoc($balanceResult);
    $balance = $row['balance'];

    if ($balance < $amount) {
        $_SESSION['error_msg'] = "Insufficient balance for withdrawal.";
        header("Location: ../account.php");
        exit();
    }

    // Update balance
    $newBalance = $balance - $amount;
    $updateQuery = "UPDATE users SET balance = $newBalance WHERE id = $userId";
    mysqli_query($conn, $updateQuery);

    // Record withdrawal
    $createdAt = date('Y-m-d H:i:s');
    $status = 0; // or 'pending', etc., depending on your workflow
    $withdrawalQuery = "INSERT INTO withdrawals (user_id, upi, amount, created_at, status) VALUES ('$userId', '$upi',' $amount', '$createdAt', '$status')";
    mysqli_query($conn, $withdrawalQuery);
    $_SESSION['success_msg'] = "withdwals successfully";
    header("Location: ../account.php");
    exit();
}