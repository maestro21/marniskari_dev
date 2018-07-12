<div class="productlist">
<?php
$lang = getlang();
foreach($data as $row) {
  $id = $row['id'];
  $name = unserialize($row['name'])[$lang]; ?>
  <div>
    <a href="<?php echo BASE_URL . 'products/view/' . $id;?>">
      <table>
        <tr>
          <td>
            <img class="img" src="<?php echo getImg('products', $id);?>" align=left>
          </td>
          <td>
            <h3><?php echo $name;?></h3>
            <p><?php echo T('alch') . ': ' . $row['alchohol'];?><br>
               <?php echo T('esize') . ': ' . $row['size'];?>
            </p>
            <p>
              <div class="btn"><?php echo T('more');?> &rarr;</div>
            </p>
          </td>
        </tr>
      </table>
    </a>
</div>
<?php } ?>
</div>
