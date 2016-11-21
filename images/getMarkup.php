<?php

$files = scandir(__DIR__);
foreach ($files as $file) {
	if ($file !== __FILE__ . '.php' && strlen($file) > 2) {
		echo "<div>
    <img src='images/$file'>
</div>\n";
	}
}
