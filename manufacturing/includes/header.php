
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redline Fire and Safety Equipment</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header class="site-header">
    <div class="container header-inner">

        <div class="logo">
            <a href="index.php" aria-label="Redline Fire and Safety Equipment Home">
                <img src="images/redline-logo.png"
                     alt="Redline Fire and Safety Equipment"
                     class="site-logo">
            </a>
        </div>

        
<nav class="navigation">
    <?php
    $currentPage = basename($_SERVER['PHP_SELF']);
    ?>

    <a href="index.php"
       class="<?= $currentPage === 'index.php' ? 'active' : '' ?>">Home</a>

    <a href="about.php"
       class="<?= $currentPage === 'about.php' ? 'active' : '' ?>">About Us</a>

    <a href="products.php"
       class="<?= $currentPage === 'products.php' ? 'active' : '' ?>">Products</a>

    <a href="how-it-works.php"
       class="<?= $currentPage === 'how-it-works.php' ? 'active' : '' ?>">How It Works</a>

    <a href="contact.php"
       class="<?= $currentPage === 'contact.php' ? 'active' : '' ?>">Contact Us</a>

    <a href="track-order.php"
       class="<?= $currentPage === 'track-order.php' ? 'active' : '' ?>">Track Order</a>

    <a href="account.php"
       class="<?= $currentPage === 'account.php' ? 'active' : '' ?>">My Account</a>

    <a href="cart.php"
       class="cart-link <?= $currentPage === 'cart.php' ? 'active' : '' ?>">Cart</a>
</nav>


    </div>
</header>
