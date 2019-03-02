<?php
	
	function autoload_poiema($class){

		$diretorio = dir(__DIR__);
		while($file = $diretorio->read()){
			if($file != "." && $file != ".."){
				include_once __DIR__ . DIRECTORY_SEPARATOR . $class . ".php";
			}
		}
	}

	spl_autoload_register('autoload_poiema');