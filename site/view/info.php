<?php
ob_start();
?>
<h1>Всем привет! В будущем здесь будет много новостей о самых популярных играх.</h1>


<?php
$content = ob_get_clean();
include_once 'view/layout.php';
?>