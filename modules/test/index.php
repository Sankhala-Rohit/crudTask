<?php
if($id){
	$dbobj->delete('test',$id);
	header("Location:".BASEURL."test");
	exit;
}
	$alldata=$dbobj->fetchAll("select * from test order by id desc");
?>
<style type="text/css">
	table{
		font-size: 20px;
	}
</style>
<table class="table table-bordered table-striped table-hover">
	<tr>
		<th>S.No.</th>
		<th>Name</th>
		<th>Description</th>
		<th>Action</th>
	</tr>
	<tr>
		<td colspan="4"><a href="<?php echo BASEURL;?>test/create">Add New Record</a></td>
	</tr>
	<?php
	$sno=0;
	foreach ($alldata as $data) {
		// print_r($data);
	?>
	<tr>
		<td><?php echo ++$sno; ?></td>
		<td><?php echo $data['name'] ?></td>
		<td><?php echo $data['description'] ?></td>
		<td>
			<a href="<?php echo BASEURL;?>test/create/<?php echo $data['id']; ?>">Edit</a>&nbsp; &nbsp; | &nbsp; &nbsp;
			<a href="#" onclick="delclick('<?php echo BASEURL;?>test/index/<?php echo $data['id'];?>')">Delete</a>&nbsp; &nbsp; | &nbsp; &nbsp;
			<a href="<?php echo BASEURL;?>picture/index/<?php echo $data['id']; ?>">Images</a>

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