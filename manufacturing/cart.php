<?php

include 'includes/header.php';

?>

<main>

    <!-- PAGE HEADER -->

    <section class="page-header">

        <div class="container">

            <p class="section-label">
                SHOPPING CART
            </p>

            <h1>
                Your Cart
            </h1>

            <p>
                Review your selected products before
                proceeding to checkout.
            </p>

        </div>

    </section>


    <!-- CART SECTION -->

    <section class="cart-section">

        <div class="container">

            <!-- EMPTY CART -->

            <div
                id="emptyCart"
                class="empty-cart"
                style="display: none;"
            >

                <div class="empty-cart-icon">
                    🛒
                </div>

                <h2>
                    Your cart is empty
                </h2>

                <p>
                    You haven't added any products yet.
                </p>

                <a
                    href="products.php"
                    class="continue-shopping-btn"
                >
                    Browse Products
                </a>

            </div>


            <!-- CART CONTENT -->

            <div
                id="cartContent"
                class="cart-layout"
            >

                <!-- CART ITEMS -->

                <div class="cart-items">

                    <div class="cart-heading">

                        <h2>
                            Selected Products
                        </h2>

                        <span id="cartItemCount">
                            0 Items
                        </span>

                    </div>

                    <div id="cartItemsContainer">

                        <!-- Products will appear here -->

                    </div>

                </div>


                <!-- CART SUMMARY -->

                <div class="cart-summary">

                    <h2>
                        Order Summary
                    </h2>


                    <div class="summary-row">

                        <span>
                            Total Items
                        </span>

                        <strong id="summaryItems">
                            0
                        </strong>

                    </div>


                    <div class="summary-row">

                        <span>
                            Subtotal
                        </span>

                        <strong id="cartSubtotal">
                            ₹0
                        </strong>

                    </div>


                    <div class="summary-row">

                        <span>
                            Delivery
                        </span>

                        <strong>
                            To be confirmed
                        </strong>

                    </div>


                    <div class="summary-divider"></div>


                    <div class="summary-total">

                        <span>
                            Estimated Total
                        </span>

                        <strong id="cartTotal">
                            ₹0
                        </strong>

                    </div>


                    <a
                        href="checkout.php"
                        id="checkoutButton"
                        class="checkout-btn"
                    >
                        Proceed to Checkout
                    </a>


                    <a
                        href="products.php"
                        class="continue-shopping"
                    >
                        ← Continue Shopping
                    </a>

                </div>

            </div>

        </div>

    </section>

</main>


<script>

/*
|--------------------------------------------------------------------------
| LOAD CART
|--------------------------------------------------------------------------
*/

function getCart() {

    return JSON.parse(
        localStorage.getItem("manufacturingCart")
    ) || [];

}


/*
|--------------------------------------------------------------------------
| SAVE CART
|--------------------------------------------------------------------------
*/

function saveCart(cart) {

    localStorage.setItem(
        "manufacturingCart",
        JSON.stringify(cart)
    );

}


/*
|--------------------------------------------------------------------------
| DISPLAY CART
|--------------------------------------------------------------------------
*/

function displayCart() {

    const cart = getCart();

    const emptyCart =
        document.getElementById("emptyCart");

    const cartContent =
        document.getElementById("cartContent");

    const container =
        document.getElementById(
            "cartItemsContainer"
        );


    /*
    |----------------------------------------------
    | EMPTY CART
    |----------------------------------------------
    */

    if (cart.length === 0) {

        emptyCart.style.display = "block";

        cartContent.style.display = "none";

        return;

    }


    /*
    |----------------------------------------------
    | SHOW CART
    |----------------------------------------------
    */

    emptyCart.style.display = "none";

    cartContent.style.display = "grid";


    container.innerHTML = "";


    let totalItems = 0;

    let subtotal = 0;


    /*
    |----------------------------------------------
    | CREATE EACH CART ITEM
    |----------------------------------------------
    */

    cart.forEach(function (item, index) {

        const itemTotal =
            item.price * item.quantity;


        totalItems += item.quantity;

        subtotal += itemTotal;


        const itemHTML = `

            <div class="cart-item">

                <div class="cart-item-image">

                    <span>
                        📦
                    </span>

                </div>


                <div class="cart-item-info">

                    <span class="cart-item-category">
                        Product
                    </span>

                    <h3>
                        ${item.name}
                    </h3>

                    <p>
                        ₹${item.price.toLocaleString("en-IN")}
                        / unit
                    </p>

                </div>


                <div class="cart-item-quantity">

                    <button
                        onclick="decreaseCartQuantity(${index})"
                    >
                        −
                    </button>

                    <span>
                        ${item.quantity}
                    </span>

                    <button
                        onclick="increaseCartQuantity(${index})"
                    >
                        +
                    </button>

                </div>


                <div class="cart-item-total">

                    <strong>
                        ₹${itemTotal.toLocaleString("en-IN")}
                    </strong>

                </div>


                <button
                    class="remove-cart-item"
                    onclick="removeCartItem(${index})"
                    title="Remove product"
                >
                    ×
                </button>

            </div>

        `;


        container.innerHTML += itemHTML;

    });


    /*
    |----------------------------------------------
    | UPDATE SUMMARY
    |----------------------------------------------
    */

    document.getElementById(
        "cartItemCount"
    ).innerText =
        totalItems +
        (totalItems === 1 ? " Item" : " Items");


    document.getElementById(
        "summaryItems"
    ).innerText =
        totalItems;


    document.getElementById(
        "cartSubtotal"
    ).innerText =
        "₹" +
        subtotal.toLocaleString("en-IN");


    document.getElementById(
        "cartTotal"
    ).innerText =
        "₹" +
        subtotal.toLocaleString("en-IN");

}


/*
|--------------------------------------------------------------------------
| INCREASE QUANTITY
|--------------------------------------------------------------------------
*/

function increaseCartQuantity(index) {

    const cart = getCart();

    cart[index].quantity++;

    saveCart(cart);

    displayCart();

}


/*
|--------------------------------------------------------------------------
| DECREASE QUANTITY
|--------------------------------------------------------------------------
*/

function decreaseCartQuantity(index) {

    const cart = getCart();


    if (cart[index].quantity > 1) {

        cart[index].quantity--;

    }


    saveCart(cart);

    displayCart();

}


/*
|--------------------------------------------------------------------------
| REMOVE ITEM
|--------------------------------------------------------------------------
*/

function removeCartItem(index) {

    const cart = getCart();


    const productName =
        cart[index].name;


    const confirmRemove =
        confirm(
            "Remove " +
            productName +
            " from your cart?"
        );


    if (!confirmRemove) {

        return;

    }


    cart.splice(index, 1);

    saveCart(cart);

    displayCart();

}


/*
|--------------------------------------------------------------------------
| INITIAL LOAD
|--------------------------------------------------------------------------
*/

displayCart();

</script>


<?php

include 'includes/footer.php';

?>