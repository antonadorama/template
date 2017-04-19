<?php 

	$src = fopen('log.log', 'r'); // 'r' указывает функции открыть файл для чтения

	$dst = fopen('log.csv', 'w'); // 'w' указывает функции открыть файл для записи

	$list = array ('Field','Field','Field','Field','Field','Field','Field','Field','Field','Field','Field','Field','Field','Field','Field','Field','Field','Field','Field');


	while ( !feof($src) ) {
		$line = fgets($src, 4096);
		$line++;
		fputs($dst, str_replace('::',';', str_replace("&conversion_sku=",";",$line)));
	}

	fclose($dst);

	fclose($src);

?>