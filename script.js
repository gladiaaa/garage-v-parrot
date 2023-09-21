document.addEventListener("DOMContentLoaded", function () {
    const minPriceInput = document.getElementById('min-price');
    const maxPriceInput = document.getElementById('max-price');
    const productsContainer = document.querySelector('.products');

    // Fonction pour mettre à jour la liste des produits en fonction des filtres
    function updateProducts() {
        const minPrice = parseFloat(minPriceInput.value) || 0;
        const maxPrice = parseFloat(maxPriceInput.value) || Infinity;

        // Envoie une requête pour récupérer les produits filtrés
        fetch('fetch_products.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: `minPrice=${minPrice}&maxPrice=${maxPrice}`,
        })
        .then(response => response.text())
        .then(data => {
            productsContainer.innerHTML = data;
        });
    }

    //mettre à jour les produits
    minPriceInput.addEventListener('input', updateProducts);
    maxPriceInput.addEventListener('input', updateProducts);

    // Charge les produits initiaux
    updateProducts();
});