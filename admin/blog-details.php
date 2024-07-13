<?php require_once('header.php'); ?>

<section class="content-header">
	<div class="content-header-left">
		<h1>View Blog Details</h1>
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
								<th width="40">Publisher</th>
								<th>Photo</th>
								<th width="100">Blog title</th>
								<th width="160">Blog subtilte</th>
								<th width="40">Date</th>
								<th width="60">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i=0;
							$statement = $pdo->prepare("SELECT
														
														t1.id,
														t1.date,
														t1.title,
														t1.sub,
														t1.img,
														t1.user_id,
														t1.Status,


														t2.id,
														t2.name

							                           	FROM blog_posts t1
							                           	JOIN user t2
							                           	ON t1.user_id = t2.id
							                    
							                           	ORDER BY t1.id DESC
							                           	");
							$statement->execute();
							$result = $statement->fetchAll(PDO::FETCH_ASSOC);
							foreach ($result as $row) {
								$i++;
								?>
								<tr class="<?php if($row['Status']=='Active') {echo 'bg-g';}else {echo 'bg-r';} ?>" >

									<td><?php echo $i; ?></td>
									<td><?php echo $row['id']; ?></td>
									<td style="width:82px;"><img src="../images/<?php echo $row['img']; ?>" style="width:80px;"></td>
									<td><?php echo $row['title']; ?></td>
									<td><?php echo $row['sub']; ?></td>
									<td><?php echo $row['date']; ?></td>
									
									<td>
										<a href="blog-details-change-status.php?id=<?php echo $row['id']; ?>" class="btn btn-success btn-xs">Change Status</a>
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