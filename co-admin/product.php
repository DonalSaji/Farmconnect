<?php require_once('header.php'); ?>

<section class="content-header">
	<div class="content-header-left">
		<h1>View Products</h1>
	</div>
	<div class="content-header-right">
		<a href="product-add.php" class="btn btn-primary btn-sm">Add Product</a>
	</div>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-info">
				<div class="box-body table-responsive">
					<table id="example1" class="table table-bordered table-hover table-striped">
					<thead class="thead-dark">
							<tr>
								<th width="10">#</th>
								<th width="60">Co-admin</th>
								<th>Photo</th>
								<th width="160">Product Name</th>
								<th width="60">Old Price</th>
								<th width="60">(C) Price</th>
								<th width="60">Quantity</th>
								<th>Category</th>
								<th width="80">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i=0;
							$statement = $pdo->prepare("SELECT
														
														t1.product_id,
														t1.product_name,
														t1.price,
														t1.rrp,
														t1.product_qty,
														t1.product_image,
														t1.cat_id,
														t1.id,

														t2.cat_id,
														t2.cat_name,

														t3.id,
														t3.name

							                           	FROM product t1
							                           	JOIN category t2
							                           	ON t1.cat_id = t2.cat_id
							                           	JOIN user t3
							                           	ON t1.id = t3.id
							                    		WHERE name='Donal'
							                           	ORDER BY t1.product_id DESC
							                           	");
							$statement->execute();
							$result = $statement->fetchAll(PDO::FETCH_ASSOC);
							foreach ($result as $row) {
								$i++;
								?>
								<tr>

									<td><?php echo $i; ?></td>
									<td><?php echo $row['name']; ?></td>
									<td style="width:82px;"><img src="../images/<?php echo $row['product_image']; ?>" alt="<?php echo $row['product_name']; ?>" style="width:80px;"></td>
									<td><?php echo $row['product_name']; ?></td>
									<td>&#8377 <?php echo $row['price']; ?></td>
									<td>&#8377 <?php echo $row['rrp']; ?></td>
									<td><?php echo $row['product_qty']; ?></td>
									
									<td><?php echo $row['cat_name']; ?>		</td>
									<td>										
										<a href="product-edit.php?id=<?php echo $row['product_id']; ?>" class="btn btn-primary btn-xs">Edit</a>
										<a href="#" class="btn btn-danger btn-xs" data-href="product-delete.php?id=<?php echo $row['product_id']; ?>" data-toggle="modal" data-target="#confirm-delete">Delete</a>  
									</td>
								</tr>
								<?php
							}
							?>							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>


<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure want to delete this item?</p>
                <p style="color:red;">Be careful! This product will be deleted from the order table, payment table, size table, color table and rating table also.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok">Delete</a>
            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>