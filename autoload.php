<?php

if( ! function_exists( 'autoload_amazon_marketwebservices' ) ) {
	
	function autoload_amazon_marketwebservices($className){

		if( strpos($className, 'MarketplaceWebService') !== 0 ) {
			return;
		}
	    
	    $filePath = str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
	    
        if(file_exists( __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . $filePath)){
            require_once $filePath;
            return;
        }

	}

}

spl_autoload_register( 'autoload_amazon_marketwebservices' );
