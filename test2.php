<?php
include('simple_html_dom.php');
$url = 'https://dantri.com.vn/giao-duc/vu-lo-de-thi-sinh-8-thi-sinh-duoc-mom-de-can-xu-ly-the-nao-20230620004656478.htm';
$html = file_get_contents($url);


$html = str_get_html($html);

$imageSrcArray = array();

$imageIndices = array(0,1,2);

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

$titleIndices = array(0,1,2);

$titleElements = $html->find('.article-item .article-title');

foreach ($titleIndices as $index) {
    if (isset($titleElements[$index])) {
        $titleArray[] = $titleElements[$index]->plaintext;
    }
}


foreach ($titleArray as $title) {
    echo '<h2>' . $title . '</h2>';
}


$descriptionArray = array();

// Define the indices of the descriptions you want (1, 2, 5, and 6)
$descriptionIndices = array(0,1,2);

// Find all matching description elements
$descriptionElements = $html->find('.article-excerpt a');

foreach ($descriptionIndices as $index) {
    if (isset($descriptionElements[$index])) {
        $description = $descriptionElements[$index]->plaintext;
        $descriptionArray[] = $description;
    }
}

// Now, $descriptionArray contains the descriptions for the specified indices

// Display the descriptions
foreach ($descriptionArray as $description) {
    echo '<p>' . $description . '</p>';
}


$titleLinkArray = array();

// Define the indices of the titles you want (2, 3, 4, and 5)
$titleIndices = array(0,1,2);

// Find all matching title anchor elements
$titleAnchorElements = $html->find('.article-item .article-title a');

foreach ($titleIndices as $index) {
    if (isset($titleAnchorElements[$index])) {
        $titleLink = $titleAnchorElements[$index]->getAttribute('href');
        $titleLinkArray[] = $titleLink;
    }
}

// Now, $titleLinkArray contains the direct URLs for the specified titles

// Display the title links
foreach ($titleLinkArray as $link) {
    echo $link . '<br>';
}


?>


