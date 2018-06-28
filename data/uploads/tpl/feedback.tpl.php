<?php
  $forms = M('forms');
  $forms->id = 3;
  $feedback = $forms->messages();


foreach($feedback['messages'] as $row) {
  $data = unserialize($row['data']);
   ?>
   <hr>
   <div class="message">
   <p><?php echo $data['message'];?> </p>
   &mdash; <?php echo $data['name'];?>, <?php echo $data['city'];?>
  
   </div>
   <?php

}
