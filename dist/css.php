<?php

    $styles = array(
        "fonts/fonts.css",	
	    "css/normalize.css",
        "css/swiper-bundle.min.css",
	    "css/style.css",
	    //"css/animate.css"
    );

    header("Content-type: text/css");

    $css = '';

    foreach ($styles as $file) {
        $css .= file_get_contents("../".$file);
    }

    echo $css;

    file_put_contents('bundle.css',$css);