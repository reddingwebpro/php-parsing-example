<?php
$start=microtime(true);
$name="foo";
$time=time();
echo "<html>";
echo "<h1>PHP Echo Environment Example:</h1>";
echo "<div>Now is $time, hello $name.</div>";
$end=microtime(true);
$total = $end - $start;
echo "<div>Total execution time was: " . number_format($total, 10) . "</div>";
echo "</html>";
