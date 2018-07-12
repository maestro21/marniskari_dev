<div class="productcategories">
<?php
foreach($data as $row) { $id = $row['id'];?>
  <div>
    <a href="<?php echo BASE_URL . 'products/category/' . $row['id'];?>">
      <img class="img" src="<?php echo getImg('productcategories/img', $id);?>"><br>
      <img class="logo"src="<?php echo getImg('productcategories/logo', $id);?>"><br>
    </a>
</div>
<?php } ?>
</div>
