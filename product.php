<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Check if the product is already in the cart
    $found = false;
    foreach ($_SESSION['cart'] as &$item) {
        if ($item['id'] == $product_id) {
            $item['quantity']++;
            $found = true;
            break;
        }
    }

    // If the product is not in the cart, add it
    if (!$found) {
        $_SESSION['cart'][] = [
            "id" => $product_id,
            "name" => $product_name,
            "price" => $product_price,
            "quantity" => 1
        ];
    }

    echo json_encode(["success" => true, "message" => "Product added to cart"]);
} else {
    echo json_encode(["success" => false, "message" => "Invalid request method"]);
}
?>
