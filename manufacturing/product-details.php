<?php

include 'includes/header.php';


/*
|--------------------------------------------------------------------------
| PRODUCT DATA
|--------------------------------------------------------------------------
| Temporary product data for development.
| Later, we will move this into MySQL.
|--------------------------------------------------------------------------
*/

$products = [

    1 => [
        "name" => "Industrial Uniform",
        "category" => "Garments & Uniforms",
        "description" => "Durable and comfortable industrial uniforms designed for workplace requirements.",
        "price" => 850,
        "image" => "images/industrial-uniform.jpg"
    ],

    2 => [
        "name" => "Corporate Uniform",
        "category" => "Garments & Uniforms",
        "description" => "Professional uniform solutions designed for offices and organizations.",
        "price" => 750,
        "image" => "images/corporate-uniform.jpg"
    ],

    3 => [
        "name" => "Fire Safety Equipment",
        "category" => "Fire & Safety",
        "description" => "Fire protection and workplace safety equipment designed for different safety requirements.",
        "price" => 2500,
        "image" => "images/fire-safety.jpg"
    ],

    4 => [
        "name" => "Industrial Safety Helmet",
        "category" => "Fire & Safety",
        "description" => "Protective industrial safety helmet designed for workplace environments.",
        "price" => 450,
        "image" => "images/safety-helmet.jpg"
    ],

    5 => [
        "name" => "Water Management System",
        "category" => "Water Management",
        "description" => "Solutions designed to support efficient water management requirements.",
        "price" => 5000,
        "image" => "images/water-management.jpg"
    ],

    6 => [
        "name" => "Water Storage Solution",
        "category" => "Water Management",
        "description" => "Practical solutions for water storage and management requirements.",
        "price" => 3500,
        "image" => "images/water-storage.jpg"
    ]

];


/*
|--------------------------------------------------------------------------
| GET PRODUCT ID
|--------------------------------------------------------------------------
*/

$product_id = isset($_GET['id'])
    ? (int) $_GET['id']
    : 1;


/*
|--------------------------------------------------------------------------
| CHECK PRODUCT
|--------------------------------------------------------------------------
*/

if (!isset($products[$product_id])) {

    echo "<div class='container'>";
    echo "<h2>Product not found.</h2>";
    echo "</div>";

    include 'includes/footer.php';

    exit;
}


$product = $products[$product_id];

?>

<main>

    <!-- BREADCRUMB -->

    <section class="product-breadcrumb">

        <div class="container">

            <a href="index.php">
                Home
            </a>

            <span> / </span>

            <a href="products.php">
                Products
            </a>

            <span> / </span>

            <span>
                <?php echo htmlspecialchars($product["name"]); ?>
            </span>

        </div>

    </section>


    <!-- PRODUCT DETAILS -->

    <section class="product-details-section">

        <div class="container">

            <div class="product-details">


                <!-- PRODUCT IMAGE -->

                <div class="product-detail-image">

                    <img
                        src="<?php echo htmlspecialchars($product["image"]); ?>"
                        alt="<?php echo htmlspecialchars($product["name"]); ?>"
                        onerror="this.style.display='none';"
                    >

                    <div class="detail-image-placeholder">
                        📦
                    </div>

                </div>


                <!-- PRODUCT INFORMATION -->

                <div class="product-detail-info">

                    <span class="detail-category">

                        <?php
                        echo htmlspecialchars(
                            $product["category"]
                        );
                        ?>

                    </span>


                    <h1>

                        <?php
                        echo htmlspecialchars(
                            $product["name"]
                        );
                        ?>

                    </h1>


                    <p class="detail-description">

                        <?php
                        echo htmlspecialchars(
                            $product["description"]
                        );
                        ?>

                    </p>


                    <!-- PRICE -->

                    <div class="detail-price">

                        ₹<?php
                        echo number_format(
                            $product["price"]
                        );
                        ?>

                        <span>
                            / unit
                        </span>

                    </div>


                    <!-- QUANTITY -->

                    <div class="quantity-section">

                        <label for="quantity">
                            Quantity
                        </label>

                        <div class="quantity-control">

                            <button
                                type="button"
                                onclick="decreaseQuantity()">
                                −
                            </button>

                            <input
                                type="number"
                                id="quantity"
                                value="1"
                                min="1"
                            >

                            <button
                                type="button"
                                onclick="increaseQuantity()">
                                +
                            </button>

                        </div>

                    </div>


                    <!-- TOTAL -->

                    <div class="product-total">

                        Total:

                        <strong id="productTotal">

                            ₹<?php
                            echo number_format(
                                $product["price"]
                            );
                            ?>

                        </strong>

                    </div>


                    <!-- BUTTONS -->

                    <div class="detail-buttons">

                        <button
                            type="button"
                            class="add-cart-btn"
                            onclick="addToCart(
                                <?php echo $product_id; ?>,
                                '<?php echo htmlspecialchars(
                                    $product["name"],
                                    ENT_QUOTES
                                ); ?>',
                                <?php echo $product["price"]; ?>
                            )">

                            Add to Cart

                        </button>


                        <a
                            href="cart.php"
                            class="view-cart-btn">

                            View Cart

                        </a>

                    </div>


                    <!-- PRODUCT INFORMATION -->

                    <div class="product-features">

                        <div>
                            ✓ Quality checked
                        </div>

                        <div>
                            ✓ Reliable manufacturing
                        </div>

                        <div>
                            ✓ Customer support
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

</main>


<script>

const productPrice =
    <?php echo $product["price"]; ?>;


function increaseQuantity() {

    const quantity =
        document.getElementById("quantity");

    quantity.value =
        parseInt(quantity.value) + 1;

    updateTotal();

}


function decreaseQuantity() {

    const quantity =
        document.getElementById("quantity");

    let current =
        parseInt(quantity.value);

    if (current > 1) {

        quantity.value =
            current - 1;

    }

    updateTotal();

}


function updateTotal() {

    const quantity =
        parseInt(
            document.getElementById("quantity").value
        );

    const total =
        productPrice * quantity;

    document.getElementById("productTotal").innerText =
        "₹" + total.toLocaleString("en-IN");

}


function addToCart(id, name, price) {

    const quantity =
        parseInt(
            document.getElementById("quantity").value
        );


    let cart =
        JSON.parse(
            localStorage.getItem("manufacturingCart")
        ) || [];


    const existingProduct =
        cart.find(
            item => item.id === id
        );


    if (existingProduct) {

        existingProduct.quantity += quantity;

    } else {

        cart.push({

            id: id,

            name: name,

            price: price,

            quantity: quantity

        });

    }


    localStorage.setItem(
        "manufacturingCart",
        JSON.stringify(cart)
    );


    alert(
        name +
        " added to cart successfully!"
    );

}

</script>


<?php

include 'includes/footer.php';

?>