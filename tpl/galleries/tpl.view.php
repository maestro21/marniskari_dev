<?php if(superAdmin()) { ?>
	<h3><?php echo T('upload image');?></h3>
<form method="POST" id="form" action="<?php echo BASE_URL . $class;?>/uploadImage?ajax=1">
<input type="hidden" name="id"  value="<?php echo $id;?>">
	<table cellpadding=0 cellspacing=0>
	<?php
		echo drawForm([ 'img' => [ null, 'file', 'path' => 'galleries/' . $id]]);
	?>
		<tr>
			<td colspan="2" align="center">
				<div class="btn submit"><?php echo T('save');?></div>
				<div class="messages"></div>
			</td>
		</tr>
	</table>
</form>
<hr></hr>
<?php } ?>

<div class=gallery>
<?php foreach($data['images'] as $img) { ?>
      <div class="img" style="background-image:url('<?php echo BASEFMURL . 'galleries/' . $id . '/' . $img['name'];?>');"></div>
<?php } ?>
</div>
