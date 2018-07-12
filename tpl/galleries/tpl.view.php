<!--<h3><?php echo T('upload image');?></h3>
<?php $formid = $class . '_form_item_' . $id;?>
<form method="POST" id="form" action="<?php echo BASE_URL . $class;?>/uploadImage?ajax=1">
<input type="hidden" name="id" id="id" value="<?php echo $id;?>">
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
-->


<?php foreach($data['images'] as $img) { ?>

<?php } ?>
