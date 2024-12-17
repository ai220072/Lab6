<?php
    header("Content-Type:image/png");

    $image=imagecreate(400,400);

    $black=imagecolorallocate($image,0,0,0);
    $gray=imagecolorallocate($image,211,211,211);

    imagefill($image,0,0,$gray);

    // Set user name
    $userName="Afiqah";
    $text="Hello, $userName";

    // TrueFont font from goolgle fonts
    $font="Pangolin/Pangolin-Regular.ttf";

    imagettftext($image,24,0,100,200,$black,$font,$text);

    imagepng($image);

    imagedestroy($image);
?>
