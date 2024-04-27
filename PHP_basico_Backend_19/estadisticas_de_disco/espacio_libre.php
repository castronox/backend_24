<?php
$libre = floor(disk_free_space('.') / 1024 / 1024);
$total = floor(disk_total_space('.') / 1024 / 1024);

echo "<h2> Espacio libre</h2>";
echo "$libre MegaBytes <br>";

echo "<h2> Total </h2>";
echo "$total MegaBytes <br>";

?>
