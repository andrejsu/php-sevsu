<h2>Троллейбусный парк</h2>
<?php
    $banners = getAllBanners();
    for ($i = 0; $i < count($banners); $i++){
        $code = $banners[$i]["code"];
        include "banner.php";
    }
?>