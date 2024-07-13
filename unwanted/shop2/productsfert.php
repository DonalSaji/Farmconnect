<?php
// The amounts of products to show on each page
$num_products_on_each_page = 8;
// The current page - in the URL, will appear as index.php?page=products&p=1, index.php?page=products&p=2, etc...
$current_page = isset($_GET['p']) && is_numeric($_GET['p']) ? (int)$_GET['p'] : 1;
// Select products ordered by the date added
$stmt = $pdo->prepare('SELECT * FROM products where category="fertilizer"');
// bindValue will allow us to use an integer in the SQL statement, which we need to use for the LIMIT clause

$stmt->execute();
// Fetch the products from the database and return the result as an Array
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Get the total number of products
$total_products = $pdo->query('SELECT * FROM products where category="fertilizer"')->rowCount();
?>

<?=template_header('Productsf')?>
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
</style>
<div class="products content-wrapper">
    <h1>FERTILIZER</h1>
    <div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            <li data-filter="*"><a href="index.php?page=products">All</a></li>
                            <li data-filter="fruit"><a href="index.php?page=productsf">FRUIT</a></li>
                            <li data-filter="vegitable"><a href="index.php?page=productsv">VEGITABLE</a></li>
                            <li data-filter="seed"><a href="index.php?page=productsseed">SEED</a></li>
							<li class="active" data-filter="fertilizer"><a href="index.php?page=productsfert">FERTILIZER</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <script>// projects filters isotop
        $(".product-filters li").on('click', function () {
            
            $(".product-filters li").removeClass("active");
            $(this).addClass("active");

            var selector = $(this).attr('data-filter');
            
            

            $(".product-lists").isotope({
                filter: selector,
            });
            
        });
        </script>

    <p><?=$total_products?> Products</p>
    
    <div class="products-wrapper">
        <?php foreach ($products as $product): ?>
        <a href="index.php?page=product&id=<?=$product['id']?>" class="product">
            <img src="imgs/<?=$product['img']?>" width="200" height="200" alt="<?=$product['product']?>">
            <span class="name"><?=$product['product']?></span>
            <span class="price">
                 &#8377;<?=$product['price']?>
                <?php if ($product['rrp'] > 0): ?>
                <span class="rrp"> &#8377;<?=$product['rrp']?></span>
                <?php endif; ?>
            </span>
        </a>
        <?php endforeach; ?>
    </div>
    <div class="buttons">
        <?php if ($current_page > 1): ?>
        <a href="index.php?page=products&p=<?=$current_page-1?>">Prev</a>
        <?php endif; ?>
        <?php if ($total_products > ($current_page * $num_products_on_each_page) - $num_products_on_each_page + count($products)): ?>
        <a href="index.php?page=products&p=<?=$current_page+1?>">Next</a>
        <?php endif; ?>
    </div>
</div>


<?=template_footer()?>