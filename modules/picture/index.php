<?php

if($id){
	$id=$id;
	$alldata=$dbobj->addqry("SELECT picture.PID,test.id,test.name, test.description, photo FROM test RIGHT JOIN picture ON test.id=picture.id where test.id=$id");
}
?>
<style type="text/css">
	table{
		font-size: 20px;
	}
</style>
<table class="table table-bordered table-striped table-hover">
	<tr>
		<th>S.No.</th>
		<th>Image</th>
		<th>Action</th>
	</tr>
	<tr>
		<td colspan="3"><a href="<?php echo BASEURL;?>picture/create/<?php echo $id;?>">Add New Record</a></td>
	</tr>
	<?php
	$sno=0;
	foreach ($alldata as $data) {
		// echo '<pre>' . print_r($data, true) . '</pre>';
	?>
	<tr>
		<td><?php echo ++$sno; ?></td>
		<td>
			<?php if($data['photo']){
							if(file_exists("public/images/$data[photo]")){
							?>
								<img class="one" src="<?php echo BASEURL."public/images/$data[photo]";?>" height="50px" width="50px" />
							<?php

							}else{
								echo "Not uploaded Properly";
							}

						}else{
							echo "not uploaded";
						}				
			?>
		</td>
		<td>
			<a href="#" onclick="delclick('<?php echo BASEURL;?>picture/delete/<?php echo $data['id'];?>?image=<?php echo $data['PID'] ?>')">Delete</a>
		</td>
	</tr>
	<?php } ?>
	
</table>
<script type="text/javascript">
	function delclick(path)
	{
		if(confirm("do you want to delete this record")){
			location.href=path;
		}
	}
</script>