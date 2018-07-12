<?php echo drawBtns($buttons['admin']);?></h1>
<div class="galleries">
<?php
foreach($data as $row) {
  $id = $row['id'];
  $name = unserialize($row['name'])[getlang()];?>
  <div>
    <a href="<?php echo BASE_URL . 'galleries/view/' . $row['id'];?>">
      <h3><?php echo $name;?></h3>
      <img class="img" src="<?php echo getImg('galleries', $id);?>">
    </a>
</div>
<?php } ?>
</div>
