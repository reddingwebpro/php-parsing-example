<?php
$start=microtime();
$name="foo";
$time=time();
?>
<html>
<h1>HTML Environment Example:</h1>
<div>Now is <?php echo $time; ?>, hello <?php echo $name; ?>.</div>
<div>Total execution time was:<?php echo microtime()-$start?></div>
</html>
