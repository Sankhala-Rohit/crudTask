<?php
$id=$id;
if(isset($_POST['submit'])){
	if($_FILES['photo']['name']){
		$_POST['photo']=time()."_photo_".$_FILES['photo']['name'];
		move_uploaded_file($_FILES['photo']['tmp_name'],"public/images/".$_POST['photo']);
	}
	$dbobj->addqry("insert into picture set photo='".$_POST['photo']."',id=$id");
	header("location:".BASEURL."picture/index/$id");
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
	<h1>Images</h1>
	<div class="main">
		<div class="main">
		<div class="one">
			Photo:<input type="file" name="photo" multiple="multiple"><br/>
		</div>
		<div class="one">
			<input type="submit" name="submit" value="Upload" >
	 	</div>
	 </div>
</form>