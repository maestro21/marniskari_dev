<!-- META stuff -->
<title><?php echo ($class->title!=''?strip_tags($class->title) . ' - ' : '') . T('sitename');?></title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="<?php echo BASE_URL;?>favicon.ico?v=2" rel="icon" type="image/x-icon" />


<!-- CSS -->
<LINK REL="StyleSheet" HREF="<?php echo PUB_URL;?>style.php?v=2" TYPE="text/css" MEDIA="screen">
  <link href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,600,700,800,900&amp;subset=cyrillic' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="<?php echo BASE_URL . EXT_FOLDER;?>slider/simple-slideshow-styles.css">
<link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">

<!-- JS -->
<script src="<?php echo BASE_URL . EXT_FOLDER;?>jquery-latest.min.js" type="text/javascript"></script>
<script src="<?php echo PUB_URL;?>script.php?lang=<?php echo getLang();?>" type="text/javascript"></script>
<script src="<?php echo BASE_URL . EXT_FOLDER;?>validate/jquery.validate.js" type="text/javascript"></script>
<script src="<?php echo BASE_URL . EXT_FOLDER;?>validate/messages_<?php echo getLang();?>.js" type="text/javascript"></script>
<script src="<?php echo BASE_URL . EXT_FOLDER;?>tinymce/tinymce.min.js" type="text/javascript"></script>
<script src="<?php echo BASE_URL . EXT_FOLDER;?>dropzone/dropzone.js" type="text/javascript"></script>
<script src="<?php echo BASE_URL . EXT_FOLDER;?>slider/better-simple-slideshow.min.js"></script>
<script src="<?php echo BASE_URL . EXT_FOLDER;?>jquery.tagcanvas.min.js"></script>


<!-- Shadowbox -->
<script src="<?php echo BASE_URL . EXT_FOLDER;?>shadowbox/shadowbox.js" type="text/javascript"></script>
<LINK REL="StyleSheet" HREF="<?php echo BASE_URL . EXT_FOLDER;?>shadowbox/shadowbox.css" TYPE="text/css" MEDIA="screen">

  <!-- Animsition -->
  <script src="<?php echo BASE_URL . EXT_FOLDER;?>animsition/animsition.min.js" type="text/javascript"></script>
  <LINK REL="StyleSheet" HREF="<?php echo BASE_URL . EXT_FOLDER;?>animsition/animsition.min.css" TYPE="text/css" MEDIA="screen">
