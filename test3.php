<?php
include('simple_html_dom.php');

$htmlSnippets = array(
    '<article class="article-item " data-track-content="" data-content-name="article-recommend" data-content-piece="article-recommend-position_1" data-content-target="/giao-duc/xem-xet-khoi-to-thi-sinh-chup-anh-de-thi-tot-nghiep-thpt-gui-ra-ngoai-20230824203532381.htm"><div class="article-thumb"><a href="/giao-duc/xem-xet-khoi-to-thi-sinh-chup-anh-de-thi-tot-nghiep-thpt-gui-ra-ngoai-20230824203532381.htm" title="Xem xét khởi tố thí sinh chụp ảnh đề thi tốt nghiệp THPT gửi ra ngoài"><img alt="Xem xét khởi tố thí sinh chụp ảnh đề thi tốt nghiệp THPT gửi ra ngoài" height="168" src="https://cdnphoto.dantri.com.vn/eQU1dkenRBZlafiTp_h1fLNfB-s=/zoom/378_252/2023/08/25/lot-de-thi-1692883854081-crop-1692935375748.jpeg" width="252" srcset="https://cdnphoto.dantri.com.vn/_ATq28T5EqxobCpw1u6OmeMdxcA=/zoom/504_336/2023/08/25/lot-de-thi-1692883854081-crop-1692935375748.jpeg 2x,https://cdnphoto.dantri.com.vn/eQU1dkenRBZlafiTp_h1fLNfB-s=/zoom/378_252/2023/08/25/lot-de-thi-1692883854081-crop-1692935375748.jpeg 1x"></a></div><div class="article-content"><h3 class="article-title"><a href="/giao-duc/xem-xet-khoi-to-thi-sinh-chup-anh-de-thi-tot-nghiep-thpt-gui-ra-ngoai-20230824203532381.htm" title="Xem xét khởi tố thí sinh chụp ảnh đề thi tốt nghiệp THPT gửi ra ngoài">Xem xét khởi tố thí sinh chụp ảnh đề thi tốt nghiệp THPT gửi ra ngoài</a></h3><div class="article-excerpt"><a href="/giao-duc/xem-xet-khoi-to-thi-sinh-chup-anh-de-thi-tot-nghiep-thpt-gui-ra-ngoai-20230824203532381.htm" title="Xem xét khởi tố thí sinh chụp ảnh đề thi tốt nghiệp THPT gửi ra ngoài"> Lực lượng công an đang làm rõ và không loại trừ khả năng xem xét khởi tố trường hợp thí sinh chụp ảnh đề thi tốt nghiệp THPT 2023 gửi ra ngoài.</a></div></div></article>',
   '<article class="article-item " data-track-content="" data-content-name="article-recommend" data-content-piece="article-recommend-position_2" data-content-target="/giao-duc/thuc-hu-thong-tin-thi-tot-nghiep-se-bo-mon-dia-ly-bat-buoc-thi-lich-su-20230913104517873.htm"><div class="article-thumb"><a href="/giao-duc/thuc-hu-thong-tin-thi-tot-nghiep-se-bo-mon-dia-ly-bat-buoc-thi-lich-su-20230913104517873.htm" title="Thực hư thông tin thi tốt nghiệp sẽ bỏ môn địa lý, bắt buộc thi lịch sử?"><img alt="Thực hư thông tin thi tốt nghiệp sẽ bỏ môn địa lý, bắt buộc thi lịch sử?" height="168" src="https://cdnphoto.dantri.com.vn/0jVqV39K5zJRIUc7pKp7Lejk50Y=/zoom/378_252/2023/08/22/thivaolop10namanhnama3712-crop-crop-1692675030697.jpeg" width="252" srcset="https://cdnphoto.dantri.com.vn/qMyYFuXe8U5ssapPN-7nk8ejNrg=/zoom/504_336/2023/08/22/thivaolop10namanhnama3712-crop-crop-1692675030697.jpeg 2x,https://cdnphoto.dantri.com.vn/0jVqV39K5zJRIUc7pKp7Lejk50Y=/zoom/378_252/2023/08/22/thivaolop10namanhnama3712-crop-crop-1692675030697.jpeg 1x"></a></div><div class="article-content"><h3 class="article-title"><a href="/giao-duc/thuc-hu-thong-tin-thi-tot-nghiep-se-bo-mon-dia-ly-bat-buoc-thi-lich-su-20230913104517873.htm" title="Thực hư thông tin thi tốt nghiệp sẽ bỏ môn địa lý, bắt buộc thi lịch sử?">Thực hư thông tin thi tốt nghiệp sẽ bỏ môn địa lý, bắt buộc thi lịch sử?</a></h3><div class="article-excerpt"><a href="/giao-duc/thuc-hu-thong-tin-thi-tot-nghiep-se-bo-mon-dia-ly-bat-buoc-thi-lich-su-20230913104517873.htm" title="Thực hư thông tin thi tốt nghiệp sẽ bỏ môn địa lý, bắt buộc thi lịch sử?"> Thông tin đang lan truyền trên mạng xã hội và một số phương tiện truyền thông về phương án thi tốt nghiệp năm 2025 được cho là chưa chính xác, chưa phải là phương án cuối cùng được Bộ Giáo dục chốt.</a></div></div></article>',
    '<article class="article-item " data-track-content="" data-content-name="article-recommend" data-content-piece="article-recommend-position_3" data-content-target="/giao-duc/pho-cuc-truong-a03-con-lo-hong-trong-khau-cham-thi-co-the-xay-ra-gian-lan-20230921112940089.htm"><div class="article-thumb"><a href="/giao-duc/pho-cuc-truong-a03-con-lo-hong-trong-khau-cham-thi-co-the-xay-ra-gian-lan-20230921112940089.htm" title="Phó Cục trưởng A03: Còn lỗ hổng trong khâu chấm thi, có thể xảy ra gian lận"><img alt="Phó Cục trưởng A03: Còn lỗ hổng trong khâu chấm thi, có thể xảy ra gian lận" height="168" src="https://cdnphoto.dantri.com.vn/CymJ3Xuujxyj8GvAtA9cj7QKm_w=/zoom/378_252/2023/09/21/nvm6963-1695270290135.jpg" width="252" srcset="https://cdnphoto.dantri.com.vn/QdZh5QjXz8kcIjOGIf_GxeF9ntw=/zoom/504_336/2023/09/21/nvm6963-1695270290135.jpg 2x,https://cdnphoto.dantri.com.vn/CymJ3Xuujxyj8GvAtA9cj7QKm_w=/zoom/378_252/2023/09/21/nvm6963-1695270290135.jpg 1x"></a></div><div class="article-content"><h3 class="article-title"><a href="/giao-duc/pho-cuc-truong-a03-con-lo-hong-trong-khau-cham-thi-co-the-xay-ra-gian-lan-20230921112940089.htm" title="Phó Cục trưởng A03: Còn lỗ hổng trong khâu chấm thi, có thể xảy ra gian lận">Phó Cục trưởng A03: Còn lỗ hổng trong khâu chấm thi, có thể xảy ra gian lận</a></h3><div class="article-excerpt"><a href="/giao-duc/pho-cuc-truong-a03-con-lo-hong-trong-khau-cham-thi-co-the-xay-ra-gian-lan-20230921112940089.htm" title="Phó Cục trưởng A03: Còn lỗ hổng trong khâu chấm thi, có thể xảy ra gian lận"> Thiếu tướng Trần Đình Chung, Phó Cục trưởng Cục An ninh chính trị nội bộ, cho rằng, quy định trong khâu chấm thi tốt nghiệp THPT còn tồn tại lỗ hổng, chưa thực sự chặt chẽ, có thể xảy ra gian lận.</a></div></div></article>'
);


$titles = array();
$images = array();
$descriptions = array();
$links = array();

for ($i = 0; $i < min(count($htmlSnippets), 3); $i++) {
    $html = str_get_html($htmlSnippets[$i]);

    $titleElement = $html->find('.article-title a', 0);
    if ($titleElement) {
        $titles[] = $titleElement->plaintext;
    } else {
        $titles[] = "Title not found.";
    }

    $imageElement = $html->find('.article-thumb img', 0);
    if ($imageElement) {
        $imageUrl = $imageElement->getAttribute('src');
        echo '<img src="' . $imageUrl . '" alt="Image ' . ($i + 1) . '"><br>';
    } else {
        
       
echo "Image " . ($i + 1) . " not found.<br>";
    }

    $descriptionElement = $html->find('.article-excerpt', 0);
    if ($descriptionElement) {
        $descriptions[] = $descriptionElement->plaintext;
    } else {
        $descriptions[] = "Description not found.";
    }

    
   
    $linkElement = $html->find('.article-title a', 0);
    if ($linkElement) {
        $links[] = $linkElement->getAttribute('href');
    } else {
        $links[] = "Link not found.";
    }
}

for ($i = 0; $i < count($titles); $i++) {
    echo "Title " . ($i + 1) . ": " . $titles[$i] . "<br>";
    echo "Description " . ($i + 1) . ": " . $descriptions[$i] . "<br>";
    echo "Link " . ($i + 1) . ": " . $links[$i] . "<br>";
    echo "<br>";
}

?>
