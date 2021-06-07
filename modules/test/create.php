<?php

if($id){
	$id=$id;
	$msg="Data updated successfully.";
	extract($dbobj->fetchOne('test',$id));
}
if(isset($_POST['name'])){

	$dbobj->addEdit('test',$_POST,$id);
	header("location:".BASEURL."test");
}

?>
<style type="text/css">
	form{
		padding: 20px;
		background-color:#fff;
		/*border: 2px solid;*/
		width: 60%;
		margin: 0 auto;

		box-shadow: 5px 5px 15px;
	}
	form h1{
		text-align: center;
		font-weight: bold;
		margin: 0;
	}
	div.main{
		padding: 5px;

	}
	form div.one{
		padding: 3px;
		/*border: 1px solid;*/
		margin: 0 auto;
		width: 100%;
	

	}
	form div.one button{
		margin: 0 auto;
	}
	div.one input{
		width: 250px;
		margin: 10px;
	}
</style>


<form method="post" action="" enctype="multipart/form-data">
	<h1>Detail Form</h1>
	<div class="main">
		<div class="one">
			Name:<input type="text" name="name" value="<?php echo (isset($name))?$name:'';?>"><br/>
		</div>
		<div class="one">
			Description:<input type="text" name="description" value="<?php echo (isset($description))?$description:'';?>"><br/>
		</div>
		<div class="one">
			<button type="submit">save</button>
	 	</div>
	 </div>
</form>