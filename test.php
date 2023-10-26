<?php
include('simple_html_dom.php');
$url = 'https://dantri.com.vn/giao-duc/vu-lo-de-thi-sinh-8-thi-sinh-duoc-mom-de-can-xu-ly-the-nao-20230620004656478.htm';
$html = file_get_contents($url);


$html = str_get_html($html);

$imageSrcArray = array();

$imageIndices = array(3, 4, 5, 6, 7);

$imageElements = $html->find('.article-thumb img');

foreach ($imageIndices as $index) {
    if (isset($imageElements[$index])) {
        $imageSrcArray[] = $imageElements[$index]->getAttribute('data-src');
    }
}


foreach ($imageSrcArray as $imageSrc) {
    echo '<img src="' . $imageSrc . '" alt="Hình ảnh"><br>';
}

$titleArray = array();

$titleIndices = array(8,9);

$titleElements = $html->find('.article-item .article-title');

foreach ($titleIndices as $index) {
    if (isset($titleElements[$index])) {
        $titleArray[] = $titleElements[$index]->plaintext;
    }
}


foreach ($titleArray as $title) {
    echo '<h2>' . $title . '</h2>';
}

$titleLinkArray = array();

$titleIndices = array(8,9,10,11,12);

$titleAnchorElements = $html->find('.article-item .article-title a');

foreach ($titleIndices as $index) {
    if (isset($titleAnchorElements[$index])) {
        $titleLink = $titleAnchorElements[$index]->getAttribute('href');
        $titleLinkArray[] = $titleLink;
    }
}


foreach ($titleLinkArray as $link) {
    echo $link . '<br>';
}

?>


