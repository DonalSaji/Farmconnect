<?php
$pdo = pdo_connect_mysql();
function pdo_connect_mysql() {
    // Update the details below with your MySQL details
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'shoppingcart';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
		
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Failed to connect to database!');
    }
}
	
// The amounts of products to show on each page
$num_products_on_each_page = 8;
// The current page - in the URL, will appear as index.php?page=products&p=1, index.php?page=products&p=2, etc...
$current_page = isset($_GET['p']) && is_numeric($_GET['p']) ? (int)$_GET['p'] : 1;
// Select products ordered by the date added
$sql = 'SELECT * FROM products ORDER BY date_added DESC LIMIT ?, ?';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(1, ($current_page - 1) * $num_products_on_each_page, PDO::PARAM_INT);
$stmt->bindValue(2, $num_products_on_each_page, PDO::PARAM_INT);
$stmt->execute();
// Fetch the products from the database and return the result as an Array
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Get the total number of products
$total_products = $pdo->query('SELECT * FROM products')->rowCount();
?>

<style>
    .product-filters {
  margin-bottom: 80px;
}

.product-filters ul {
  margin: 0;
  padding: 0;
  list-style: none;
  text-align: center;
}

.product-filters ul li {
  display: inline-block;
  font-weight: 700;
  font-size: 18px;
  margin: 15px;
  border: 2px solid #051922;
  color: #323232;
  cursor: pointer;
  padding: 8px 20px;
  border-radius: 25px;
}
a{
    color:black;
}
.product-filters ul li.active {
  border: 2px solid #F28123;
  background-color: #F28123;
  color: #fff;
}
</style><section>
    <div class=" content-wrapper">
        <h1>Products</h1>
        <div class="row">
            <div class="-md-12">
                <div class="product-filters">
                    <ul>
                        <li class="active" data-filter="*"><a href="index.php?page=products">All</a></li>
                        <li data-filter="fruit"><a href="index.php?page=productsf">FRUIT</a></li>
                        <li data-filter="vegitable"><a href="index.php?page=productsv">VEGITABLE</a></li>
                        <li data-filter="seed"><a href="index.php?page=productsseed">SEED</a></li>
                        <li data-filter="fertilizer"><a href="index.php?page=productsfert">FERTILIZER</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <script>
            // projects filters isotop
            $(".product-filters li").on('click', function () {

                $(".product-filters li").removeClass("active");
                $(this).addClass("active");

                var selector = $(this).attr('data-filter')

                $(".product-lists").isotope({
                    filter: selector,
                });
            });
        </script>
        <p><?= $total_products ?> Products</p>
        <div class="products-wrapper">
            <?php foreach ($products as $product): ?>
                <a href="index.php?page=product&id=<?= $product['id'] ?>" class="product">
                    <img src="imgs/<?= $product['img'] ?>" width="200" height="200" alt="<?= $product['product'] ?>">
                    <span class="name"><?= $product['product'] ?></span>
                    <span class="price">
                        <?php if ($product['rrp'] != 0 && $product['rrp'] < $product['price']): ?>
                            <span class="rrp">&#8377;<?= $product['rrp'] ?></span>
                        <?php else: ?>
                             &#8377;<?= $product['price'] ?>
                        <?php endif; ?>
                    </span>

                </a>
            <?php endforeach; ?>
        </div>
        <div class="buttons">
            <?php if ($current_page > 1): ?>
                <a href="index.php?page=products&p=<?= $current_page - 1 ?>">Prev</a>
            <?php endif; ?>
            <?php if ($total_products > ($current_page * $num_products_on_each_page) - $num_products_on_each_page + count($products)): ?>
                <a href="index.php?page=products&p=<?= $current_page + 1 ?>">Next</a>
            <?php endif; ?>
        </div>
    </div>
</section>

<?=template_footer()?>