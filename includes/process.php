<?php
require_once('user.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userType = $_POST['userType'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    try {
        if ($userType === 'admin') {
            $productName = $_POST['productName'];
            $productImage = $_POST['productImage'];

            $admin = new Admin(1, $username, 'admin@example.com', $password);
            $admin->uploadProduct($productName, $productImage);
        } elseif ($userType === 'customer') {
            $customer = new Customer(2, $username, 'customer@example.com', $password);
            $customer->viewProduct();
        } else {
            echo "Invalid user type";
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
