<?php
    header("Content-Type: image/png");

    // Create img canvas
    $image=imagecreate(500, 200);

    // Define colors
    $yellow=imagecolorallocate($image,255,255,0);
    $black=imagecolorallocate($image,0,0,0);

    // Add the text to the image
    imagestring($image,5,120,70,"100 Items Sold",$black);

    // Output img
    imagepng($image);

    // Free up memory
    imagedestroy($image);
?>