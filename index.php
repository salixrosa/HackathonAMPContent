<?php

$filesToInclude = [
    '1-headprecustomcss',
    '2-customcss',
    'add-to-cart-btn-styles',
    '3-fromcssthroughsvgs',
    '4-headerthroughsidebar',
    '5-ampsidebar',
    'add-to-cart-btn',
    //'6 - maincontent',
    '7 - footer'
];
$html = '';
foreach($filesToInclude as $fileToInclude) {

    $html .= file_get_contents($fileToInclude . '.html');
}

echo $html;