<div class="partners">
<?php
$files = array_diff(scandir(UPLOADS_FOLDER .'pics/partners/'), array('..', '.'));
foreach ($files as $file) {
    echo "<img src=" . UPLOADS_URL . "pics/partners/" . $file .">";
} ?>

</div>