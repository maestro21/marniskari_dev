<?php
  $description =   unserialize($data['description'])[getlang()]; 
 ?>
<table>
  <tr>
    <td style="width:100px">
      <img class="img" src="<?php echo getImg('products', $id);?>" align=left>
    </td>
    <td>
      <p><?php echo $description;?></p>
      <p><?php echo T('alch') . ': ' . $data['alchohol'];?><br>
         <?php echo T('esize') . ': ' . $data['size'];?>
      </p>
    </td>
  </tr>
</table>
