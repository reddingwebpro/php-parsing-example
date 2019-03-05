<?php
$start = microtime(true);
$name = "foo";
$time = time();
?>
<html>
<h1>HTML Environment Example:</h1>
<div>Now is <?php echo $time; ?>, hello <?php echo $name; ?>.</div>
<?
$end = microtime(true);
$total = $end - $start; ?>
<div>Total execution time was: <?php number_format($total, 10) ?></div>
</html>
