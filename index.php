<?php

$filesToInclude = [
    '1-headprecustomcss',
    '1-5-customcss-open-tag',
    '2-customcss.css',
    'add-to-cart-btn-styles.css',
    'amplistandbind-styles.css',
    'amp-product-card.css',
    '2-5-customcss-close-tag',
    '3-fromcssthroughsvgs',
    '4-headerthroughsidebar',
    '5-ampsidebar',
<<<<<<< HEAD
    //'6 - maincontent',
    'amp-added-to-cart',
=======
    'amplistandbind',
    '6 - maincontent',
    'amp-product-card',
>>>>>>> origin/amplistandbind
    '7 - footer'
];
$html = '';
foreach($filesToInclude as $fileToInclude) {

    $fileName = str_replace('.css.html', '.css', $fileToInclude . '.html');
    $html .= file_get_contents($fileName);
}

echo $html;