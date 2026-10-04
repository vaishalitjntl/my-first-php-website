document.addEventListener("DOMContentLoaded", function () {

    const searchInput = document.getElementById("productSearch");
    const categoryFilter = document.getElementById("categoryFilter");

    const products = document.querySelectorAll(".product-item");


    function filterProducts() {

        const searchText =
            searchInput ? searchInput.value.toLowerCase() : "";

        const selectedCategory =
            categoryFilter ? categoryFilter.value : "all";


        products.forEach(function (product) {

            const productName =
                product.dataset.name.toLowerCase();

            const productCategory =
                product.dataset.category;


            const matchesSearch =
                productName.includes(searchText);

            const matchesCategory =
                selectedCategory === "all" ||
                productCategory === selectedCategory;


            if (matchesSearch && matchesCategory) {

                product.style.display = "";

            } else {

                product.style.display = "none";

            }

        });

    }


    if (searchInput) {

        searchInput.addEventListener(
            "input",
            filterProducts
        );

    }


    if (categoryFilter) {

        categoryFilter.addEventListener(
            "change",
            filterProducts
        );

    }

});
