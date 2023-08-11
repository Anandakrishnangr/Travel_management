<?php /* Smarty version 2.6.26, created on 2020-11-12 17:08:48
         compiled from changetile.tpl */ ?>
<?php echo '

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.containerx1 {
  position: relative;
  width: 100%;
  
}

.containerx1 img {
  width: 960px;
  height: 540px;


}

 .btnx1 {
  	
  

  background-color: #555;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;

}

 .btnx1:hover {
  background-color: black;
  color: white;
}
</style>
'; ?>


<div class="containerx1">

	<form method="post" enctype="multipart/form-data">
		
		<div style="padding: 100px;">
			<h1>First Tile</h1>
			<img class="img" src="web/images/hero_<?php echo $this->_tpl_vars['k']; ?>
.jpg"><br><br>
			<input type="button" value="Change" style="top: 84%;" class="btnx1" onclick="document.getElementById('coverim').click()">
<div style="display: none;"><input type="file" onchange="submit();"   id="coverim" name="coverim"></div>
		</div>
	<!-- 
			<div style="padding: 100px;">
				<h1>Second Tile</h1>
				<img class="img" src="web/images/hero_1.jpg"><br><br>
				<a class="btnx1" href="">Change</a>

			</div> -->

	</form>

	
</div>