<?php include(__DIR__ . '/../includes/header.php'); ?>
<?php include(__DIR__ . '/../includes/navbar.php'); ?>

<main class="main">
    <div class="container">
        <h1><?php echo $title; ?></h1>

        <div class="product-actions">
            <form method="get" class="search-form">
                <input type="text" name="search" placeholder="Пошук товарів..." value="<?php echo htmlspecialchars($search ?? ''); ?>">
                <button type="submit" class="btn">Пошук</button>
            </form>

            <div class="products-grid">
                <?php if (empty($products)): ?>
                    <p>Товарів не знайдено</p>
                <?php else: ?>
                    <?php foreach ($products as $product): ?>
                        <div class="product-card">
                            <h3><?php echo htmlspecialchars($product['ProductName']); ?></h3>
                            <p class="price"><?php echo number_format($product['Price'], 2); ?> грн</p>
                            <a href="<?php echo base_url('/product/detail/' . $product['ProductID']); ?>" class="btn">Детальніше</a>
                            <?php if (isset($_SESSION['user'])): ?>
                                <form action="<?php echo base_url('cart/add'); ?>" method="post" style="display: inline;">
                                    <input type="hidden" name="id" value="<?php echo $product['ProductID']; ?>">
                                    <button type="submit" class="btn btn-secondary">В кошик</button>
                                </form>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
</main>

<?php include(__DIR__ . '/../includes/footer.php'); ?>