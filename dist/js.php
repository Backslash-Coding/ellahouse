<?php

    $scripts = array(
        "js/jquery.min.js",	
        "js/swiper-bundle.min.js",
        "js/jquery.shuffleLetters.js",
        "js/rellax.min.js",
        "js/skrollr.min.js",
	    "js/app.js"
    );

    header('Content-Type: text/javascript');

    $js = '';

    foreach ($scripts as $file) {
        $js .= file_get_contents("../".$file)."\n/**/\n";
    }

    echo $js;

    file_put_contents('bundle.js',$js);