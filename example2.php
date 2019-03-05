<?php
$start=microtime();
$name="foo";
$time=time();
echo "<html>";
echo "<h1>PHP Echo Environment Example:</h1>";
echo "<div>Now is $time, hello $name.</div>";
echo "<div>Total execution time was: ". microtime()-$start ."</div>";
echo "</html>";
