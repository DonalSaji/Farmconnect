<?php

$stmt = $pdo->prepare('SELECT * FROM products ORDER BY date_added DESC LIMIT 4');
$stmt->execute();
$recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?=template_header('Home')?>
<style>
    button{
        width:35px;
        height:35px;
        border-radius:20px;
        background-color:lightgrey;  
    }
    
.slider_main .carousel-indicators {
    display: none;
}

#banner1 .carousel-control-prev,
#banner1 .carousel-control-next {
    width: 103px;
    height: 103px;
    background-color: #ffffff20;
    color: #000000bb;
    font-size: 60px;
    opacity: 1;
    top: 50%;
    
    z-index: 1;
    border-radius: 10px;
}

#banner1 .carousel-control-prev {
    left: 3%;
}

#banner1 .carousel-control-next {
    right: 3%;
}


.carousel-item {
    height: 90vh;
    width: 80%;
}
#banner1 .carousel-item img {
    width: 80%;
    height: 90vh;
    position: relative;
    left:25%;
}
#banner1 .carousel-control-next:focus,
#banner1 .carousel-control-next:hover,
#banner1 .carousel-control-prev:focus,
#banner1 .carousel-control-prev:hover {
    color: #6b7908;
}
    </style>
 <div class="slider_main">
        <!-- carousel code -->
        <div
          id="banner1"
          class="carousel slide carousel-fade"
          data-ride="carousel"
          data-interval="6000"
        >
          <ol class="carousel-indicators">
            <li data-target="#banner1" data-slide-to="0" class="active"></li>
            <li data-target="#banner1" data-slide-to="1"></li>
            <li data-target="#banner1" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <picture>
                <source srcset="../images/fv1.jpg" />

                <img
                  srcset="../images/fv2.jpg"
                  alt="responsive image"
                  class="d-block img-fluid"
                />
              </picture>
              <div class="carousel-caption relative"></div>
            </div>
            <!-- /.carousel-item -->
            <div class="carousel-item">
              <picture>
                <img
                  srcset="../images/fv3.jpg"
                  alt="responsive image"
                  class="d-block img-fluid"
                />
              </picture>
              <div class="carousel-caption relative"></div>
            </div>
            <!-- /.carousel-item -->
            <div class="carousel-item">
              <picture>
                <source srcset="../images/sf1.jpg" />
                <source srcset="../images/fv2.jpg" />
                <source srcset="../images/fv3.jpg" />
                <source srcset="../images/fv1.jpg" />
                <img
                  srcset="../images/fv3.jpg"
                  alt="responsive image"
                  class="d-block img-fluid"
                />
              </picture>
              <div class="carousel-caption relative"></div>
            </div>
            <!-- /.carousel-item -->
          </div>
          <!-- /.carousel-inner -->
          <a
            class="carousel-control-prev"
            href="#banner1"
            role="button"
            data-slide="prev"
          >
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a
            class="carousel-control-next"
            href="#banner1"
            role="button"
            data-slide="next"
          >
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
<div class="recentlyadded content-wrapper">
    <h2>Recently Added Products</h2>
    <div class="products">
        <?php foreach ($recently_added_products as $product): ?>
        <a href="index.php?page=product&id=<?=$product['id']?>" class="product">
            <img src="imgs/<?=$product['img']?>" width="200" height="200" alt="<?=$product['product']?>">
            <span class="name"><?=$product['product']?></span>
            <span class="price">
                &#8377;<?=$product['price']?>
                <?php if ($product['rrp'] > 0): ?>
                <span class="rrp">&#8377;<?=$product['rrp']?></span>
                <?php endif; ?>
            </span>
        </a>
        <?php endforeach; ?>
    </div>
</div>
<?=template_footer()?>