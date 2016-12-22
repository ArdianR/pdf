<h2><?=$title?></h2>

<h3><?=$graph_url1?></h3>
<?=$graph_img1 ?>

<hr>

<h3><?=$graph_url2?></h3>
<?=$graph_img2?>
<?php $img = end(explode('/',$graph_url1)) ?>
<a href="reporte/index/<?=$img?>">pdf</a>
