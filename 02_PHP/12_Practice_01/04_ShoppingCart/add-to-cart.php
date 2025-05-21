<?php
session_start();

$products = [
    'iphone16' => ['name' => 'Iphone 16', 'price' => 999],
    'samsung24' => ['name' => 'Samsung Galaxy S24', 'price' => 990],
];

if (isset($_GET['product_id']) && isset($products[$_GET['product_id']])) {
    $product = $products[$_GET['product_id']];

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    if (isset($_SESSION['cart'][$_GET['product_id']])) {
        $_SESSION['cart'][$_GET['product_id']]['quantity'] += 1;
        header("Location: dashboard.php?product_id={$_GET['product_id']}");
    } else {
        $_SESSION['cart'][$_GET['product_id']] = [
            'name' => $product['name'],
            'price' => $product['price'],
            'quantity' => 1
        ];
    }

    // header("Location: show-cart.php");
    // exit;
} else {
    echo "Invalid product.";
}
?>
