<?php include_once('connection.php');

?>
<?php
session_start();
// Include functions and connect to the database using PDO MySQL
include 'functions.php';
$pdo = pdo_connect_mysql();// Page is set to home (home.php) by default, so when the visitor visits, that will be the page they see.

$num_per_page=8;

if(isset($_GET["page"])){
    $page=$_GET["page"];
}
else{
    $page=1;

}

$start_from=($page -1)*8;
$sql="SELECT * FROM products ORDER BY date_added DESC limit  {$start_from},{$num_per_page}";
$rs_result=mysqli_query($db,$sql);



$stmt = $pdo->prepare('SELECT * FROM products ORDER BY date_added DESC limit  '.$start_from.','.$num_per_page.'');
$stmt->execute();
$recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>


<?=template_header('Pages')?>
<style>
    
    li{
        list-style-type:none;
        display:inline-block;
        margin:0 5px;
        background-color:lightgreen;
        width:40px;
        height:23px;
        text-align:center;
        border-radius:30px;
        
    }
 li a:hover{
  border-color: #fff;
  background-color:grey;
 
}
.active{
  color: green;
  background-color:green;
  border-color: #505050;

}
    
    </style>
    <div class="recentlyadded content-wrapper">
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
<center>

               
                <?php
                $sql="SELECT * FROM products";
                $rs_result=mysqli_query( $db,$sql);
                $total_records=mysqli_num_rows( $rs_result);
                $total_pages=ceil($total_records/$num_per_page);

                for($i=1;$i<=$total_pages;$i++)
                {
                    if($i==$page){
                        $active="active";
                    }
                    else{
                        $active="";
                    }
                    echo'<li class="'.$active.'"><a href=page.php?page='.$i.'>'.$i.'</a>';
                }
                if($total_pages>=$page){
                    echo '<li><a>Next</a></li>';
                }
                
                ?> </center>

<?=template_footer()?>
                     